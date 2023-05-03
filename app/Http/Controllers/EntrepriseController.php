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

        $livraisons = DB::table("livraisons")
            ->select()
            ->get();

        return View::make("ferme/entreprise")->with([
            "leftProducts"=>$products[0],
            "rightProducts"=>$products[1],
            "annuaire"=>$annuaire,
            "livraisons"=>$livraisons->split(2)
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


        DB::table("files")->insert([
            'fileID' => $fileID,
            'Entreprise' => $request->input("entreprise"),
            'type' => $request->input("type"),
            'details' => $request->input("details"),
            'path' => $request->input("type") . "/" . $request->input("entreprise") . $fileID . ".pdf",
            'publicAccess' => 0
        ]);

        return redirect("/entreprise");
    }
    public function contrat(Request $request, $entreprise)
    {
        $livraisons = DB::table("livraisons")
            ->where("entreprise", $entreprise)
            ->select()
            ->get();

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

        $quantity = [];
        $products = [];
        $price = [];
        $total = 0;
        $details = "Contrat " . $entreprise . " - ";

        foreach (array_keys((array)$livraisons[0]) as $product) {
            if ($product == "id" || $product == "entreprise" || $product == "delivery"|| $product == "quand") continue;
            if ($livraisons->first()->$product == 0) continue;

            array_push($quantity, $livraisons[0]->$product);
            array_push($products, $product);
            if (str_contains($product, "Thé")) {
                $number = $livraisons->first()->$product;
                $tea = "";
                switch ($product) {
                    case "ThéCitron":
                        $tea = "Thé au citron";
                        break;
                    case "ThéRouge":
                        $tea = "Thé aux fruits rouges";
                        break;
                    case "ThéPeche":
                        $tea = "Thé glacé à la pêche";
                        break;
                    case "ThéVert":
                        $tea = "Thé vert";
                        break;
                    case "ThéMenthe":
                        $tea = "Thé à la menthe";
                        break;
                }
                $contratPrice = $teas->where("name", $tea)->first()->contratPrice;
                array_push($price, $contratPrice * $number);
                $details = $details . $tea . " " . $product . ", ";
            } else {
                $contratPrice = $stocks->where("name", $product)->first()->contratPrice;
                $number = $livraisons->first()->$product;
                array_push($price, $contratPrice * $number);
                $details = $details . $livraisons->first()->$product . " " . $product . ", ";
            }
            $total += $contratPrice * $number;

        }

        $fileID = rand(0, 99999);
        if ($request->input("contact") == null || $request->input("contact") == "") return redirect()->route('entreprise')->withErrors(['msg' => "Erreur : Vous devez indiquer la personne à qui vous livrer."]);

        $data = [
            'to' => $request->input("contact"),
            'from' => Auth::user()->name,
            'quantity' => $quantity,
            'products' => $products,
            'price' => $price,
            'total' => $total,
            'id' => $fileID,
            'date' => date('d/m/Y')
        ];

        $pdf = PDF::loadView('bondeLivraison', $data);
        $pdf->save('/home/Ferme/storage/app/pdf/livraisonsToSign/' .  $fileID . ".pdf");

        DB::table("comptes")->insert([
            'discord' => Auth::user()->id,
            'user' => Auth::user()->name,
            'name' => 'Contrat - Entreprise',
            'montant' => $total,
            'details' => $details,
            'meta' => "{'icon': 'factory'}"
        ]);

        DB::table("files")->insert([
            'fileID' => $fileID,
            'Entreprise' => str_replace("'", "", $entreprise),
            'type' => "livraisonsToSign",
            'name' => "Bon de livraison - " . now()->format("d/m/Y"),
            'path' => "livraisonsToSign/" . $fileID . ".pdf",
            'publicAccess' => 1
        ]);

        Session::flash('download.in.the.next.request', 'livraisons/' . $fileID);

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


        $pdf->save('/home/Ferme/storage/app/pdf/livraisonsToSign/' . $fileID . ".pdf");

        DB::table("comptes")->insert([
            'discord' => Auth::user()->id,
            'user' => Auth::user()->name,
            'name' => 'Facturation entreprise',
            'montant' => $total,
            'details' => $details,
            'meta' => "{'icon': 'factory'}"
        ]);

        DB::table("files")->insert([
            'fileID' => $fileID,
            'Entreprise' => str_replace("'", "", $request->input("entreprise")),
            'type' => "livraisonsToSign",
            'name' => "Bon de livraison - " . now()->format("d/m/Y"),
            'path' => "livraisonsToSign/" . $fileID . ".pdf",
            'publicAccess' => 1
        ]);

        Session::flash('download.in.the.next.request', 'pdf/livraisonsToSign/' . $request->input("entreprise") . '/' . $fileID . ".pdf");

        return redirect("/entreprise");
    }
}
