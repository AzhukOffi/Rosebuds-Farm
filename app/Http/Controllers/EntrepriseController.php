<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use View;
use Auth;
use PDF;

class EntrepriseController extends Controller
{
    public function index()
    {
        if (Auth::user()->rankLevel < 2) return redirect("/")->withErrors(['msg' => "Erreur : Vous n'avez pas accès à cette page."]);

        $stocks = DB::table("stock")
            ->select()
            ->where("entreprisePrice", '!=', 0)
            ->get()
            ->sortBy("name");

        $teas = DB::table("teas")
            ->select()
            ->where("entreprisePrice", '!=', 0)
            ->get()
            ->sortBy("name");

        $products = $stocks->merge($teas)->split(2);

        $annuaire = DB::table("annuaire")
            ->select()
            ->get()
            ->sortBy("name");

        return View::make("entreprise")->with([
            "leftProducts"=>$products[0],
            "rightProducts"=>$products[1],
            "annuaire"=>$annuaire
        ]);
    }
    public function upload(Request $request)
    {
        $fileID = rand(0, 99999);

        if ($request->hasFile("pdf")) {
            if ($request->file("pdf")->getClientOriginalExtension() != "pdf") return redirect()->route('entreprise')->withErrors(['msg' => "Erreur : Vous devez joindre un PDF."]);
            $destination = "pdf/" . $request->input("type") . "/" . $request->input("entreprise");
            $image = $request->file("pdf");
            $path = $request->file("pdf")->storeAs($destination, $fileID . ".pdf");
        }

        DB::table("files")
            ->insert(['fileID'=>$fileID, 'Entreprise'=>$request->input("entreprise"), 'type'=>$request->input("type"), 'details'=>$request->input("details")]);

        return redirect("/entreprise");
    }
    public function contrat(Request $request, $entreprise)
    {
        $fileID = rand(0, 99999);
        $data = [];
        if ($request->input("contact") == null || $request->input("contact") == "") return redirect()->route('entreprise')->withErrors(['msg' => "Erreur : Vous devez indiquer la personne à qui vous livrer."]);

        switch ($entreprise) {
            case "Restaurant":
                $data = [
                    'to' => $request->input("contact"),
                    'from' => Auth::user()->name,
                    'quantity' => [800,250,50,50,275],
                    'products' => ["Patates","Laitues","Carottes","Oignons","Farines"],
                    'price' => [1600,750,100,100,6875],
                    'total' => 9425,
                    'id' => $fileID,
                    'date' => date('d/m/Y')
                ];
                $details = "Contrat Restaurant - 800 Patates, 250 Laitues, 50 Carottes, 50 Oignons, 275 Farines";
                $total = 9425;

                $pdf = PDF::loadView('bondeLivraison', $data);
                $pdf->save('/home/Ferme/storage/app/pdf/livraisonsToSign/' . $entreprise . '/' . $fileID . ".pdf");
                break;
            case "Vignoble":
                $data = [
                    'to' => $request->input("contact"),
                    'from' => Auth::user()->name,
                    'quantity' => array("1000","500","500","500"),
                    'products' => array("Carottes","Pêches","Fraises","Framboises"),
                    'price' => array(3000,1000,1000,1500),
                    'total' => 6500,
                    'id' => $fileID,
                    'date' => date('d/m/Y')
                ];
                $details = "Contrat Vignoble - 1000 Carottes, 500 Pêches, 500 Fraises, 500 Framboises";
                $total = 6500;

                $pdf = PDF::loadView('bondeLivraison', $data);
                $pdf->save('/home/Ferme/storage/app/pdf/livraisonsToSign/' . $entreprise . '/' . $fileID . ".pdf");
                break;
            default:
                return redirect()->route('entreprise')->withErrors(['msg' => "Erreur : Une erreur inconnue est survenue."]);
        }

        DB::table("comptes")->insert([
            'discord' => Auth::user()->id,
            'user' => Auth::user()->name,
            'name' => 'Contrat - Entreprise',
            'montant' => $total,
            'details' => $details,
            'meta' => "{'icon': 'factory'}"
        ]);

        Session::flash('download.in.the.next.request', 'pdf/livraisonsToSign/' . $entreprise . '/' . $fileID . ".pdf");

        return redirect("/entreprise");
    }
    public function facturerEntreprise(Request $request) {
        $fileID = rand(0, 99999);
        $total = 0;
        $quantity = [];
        $product = [];
        $price = [];
        $details = $request->input("entreprise") . " / ";

        foreach ($request->all() as $key => $item) {
            if ($key == "_token") continue;
            if ($key == "entreprise") continue;
            if ($key == "contact") continue;
            if ($item == null) continue;

            if (str_contains($key, "Thé")) {
                $tea = DB::table("teas")
                    ->select()
                    ->where("name", str_replace("_", " ", $key))
                    ->get()
                    ->first();


                $productPrice = $tea->entreprisePrice * $item;

                array_push($quantity, $item);
                array_push($product, str_replace("_", " ", $key));
                array_push($price, $productPrice);

                $total = $total + $productPrice;
                $details = $details . $item . " " . $key . ", ";
            } else {
                $stock = DB::table("stock")
                    ->select()
                    ->where("name", $key)
                    ->get()
                    ->first();

                $productPrice = $stock->entreprisePrice * $item;

                array_push($quantity, $item);
                array_push($product, $key);
                array_push($price, $productPrice);

                $total = $total + $productPrice;
                $details = $details . $item . " " . $key . ", ";
            }
        }

        if ($total == 0) return redirect()->route('entreprise')->withErrors(['msg' => "Erreur : Vous n'avez mis aucun produit."]);

        $data = [
            'to' => $request->input("contact"),
            'from' => Auth::user()->name,
            'quantity' => $quantity,
            'products' => $product,
            'price' => $price,
            'total' => $total,
            'id' => $fileID,
            'date' => date('d/m/Y')
        ];


        $pdf = PDF::loadView('bondeLivraison', $data);


        $pdf->save('/home/Ferme/storage/app/pdf/livraisonsToSign/' . $request->input("entreprise") . '/' . $fileID . ".pdf");

        DB::table("comptes")->insert([
            'discord' => Auth::user()->id,
            'user' => Auth::user()->name,
            'name' => 'Facturation entreprise',
            'montant' => $total,
            'details' => $details,
            'meta' => "{'icon': 'factory'}"
        ]);

        Session::flash('download.in.the.next.request', 'pdf/livraisonsToSign/' . $request->input("entreprise") . '/' . $fileID . ".pdf");

        return redirect("/entreprise");
    }
}
