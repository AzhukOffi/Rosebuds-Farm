<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use View;
use Illuminate\Support\Facades\DB;
use Auth;

class VenteController extends Controller
{
    public function index()
    {
        $teas = DB::table("teas")
            ->select()
            ->get()
            ->sortBy("id");

        $supérettes = DB::table("superettes")
            ->select()
            ->get()
            ->sortBy("id");


        return View::make("ferme/vente")->with([
            "teas"=>$teas,
            "supérettes"=>$supérettes,
            "date"=>now()
        ]);
    }
    public function vente($type)
    {
        if ($type == "thé") {
            $zip = request("zip");
            $total = request("total");
            $reste = request("reste");

            if ($total == null || is_int($total)) return redirect()->route('vente.index')->withErrors(['msg' => "Erreur : Veuillez entrez le total de la commande."]);

            if (is_int($reste)) return redirect()->route('vente.index')->withErrors(['msg' => "Erreur : Vous devez indiquez un nombre ou rien dans le reste."]);
            if ($reste == null) $reste = 0;

            $supérette = DB::table("superettes")
                ->where("name", $zip)
                ->get()[0];


            if ($supérette->total == -1 || $supérette->restant == 0) {
                $vendu = $total - $reste;
            } else {
                $vendu = $supérette->restant - $reste;
            }

            DB::table("teas")
                ->where("name", "Thé glacé à la pêche")
                ->update(['stock' => DB::raw('stock - ' . $vendu)]);

            DB::table("comptes")->insert([
                'discord' => Auth::user()->id,
                'user' => Auth::user()->name,
                'name' => 'Vente 24/7',
                'montant' => $vendu*20,
                'details' => '' . $zip . '   /   ' . $vendu . ' bouteilles vendues',
                'meta' => "{'icon': 'storefront'}",
            ]);

            if ($reste == 0) {
                DB::table("superettes")
                    ->where("name", $zip)
                    ->update(['total' => $total, 'restant' => $reste, 'endAt' => now()->addHours(1)]);
            } else {
                DB::table("superettes")
                    ->where("name", $zip)
                    ->update(['total' => $total, 'restant' => $reste]);
            }

            return redirect("/vente");
        }
        if ($type == "farine") {
            $amount = request("amount");

            if ($amount == null || is_int($amount)) return redirect()->route('vente.index')->withErrors(['msg' => "Erreur : Veuillez entrez un nombre valide."]);


            if (request("stock") == null) {
                DB::table("stock")
                    ->where("name", "Sacs en toile")
                    ->update(['stock' => DB::raw('stock - ' . $amount)]);


                DB::table("comptes")->insert([
                    'discord' => Auth::user()->id,
                    'user' => Auth::user()->name,
                    'name' => 'Export Farine',
                    'montant' => $amount*21,
                    'details' => '' . $amount . ' Farines',
                    'meta' => "{'icon': 'export_notes'}"
                ]);
            } else {
                DB::table("stock")
                    ->where("name", "Sacs en toile")
                    ->update(['stock' => DB::raw('stock - ' . $amount)]);
                DB::table("stock")
                    ->where("name", "Farines")
                    ->update(['stock' => DB::raw('stock + ' . $amount)]);
            }

            return redirect("/vente");
        }



    }
}
