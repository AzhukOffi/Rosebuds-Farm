<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use View;
use Request;
use Auth;

class FacturationController extends Controller
{
    public function index()
    {
        $stocks = DB::table("stock")
            ->select()
            ->get()
            ->sortBy("name");
        $teas = DB::table("teas")
            ->select()
            ->where("price", '!=', 0)
            ->get()
            ->sortBy("name");
        $price = DB::table("price")
            ->select()
            ->where("client", "Particulier")
            ->get()
            ->sortBy("name");

        $annuaire = DB::table("annuaire")
            ->select()
            ->get()
            ->sortBy("name");

        $products = $price->split(2);

        return View::make("ferme/facturation")->with([
            "stocks"=>$stocks->merge($teas),
            "leftProducts"=>$products[0],
            "rightProducts"=>$products[1],
            "annuaire"=>$annuaire,
        ]);
    }
    public function facturer()
    {
        if (request("client") == null) return redirect()->route('facturation')->withErrors(['msg' => "Erreur : Vous n'avez pas indiqué le client."]);

        $stocks = DB::table("stock")
            ->select()
            ->where("price", '!=', 0)
            ->get()
            ->sortBy("name");
        $teas = DB::table("teas")
            ->select()
            ->where("price", '!=', 0)
            ->get()
            ->sortBy("name");

        $products = $stocks->merge($teas);
        $details = "" . request("client") . " / ";
        $total = 0;
        foreach ($products as $product) {
            $nbr = request(str_replace(" ","_",$product->name));
            if ($nbr != null) {
                $details = $details . $nbr . " " . $product->name . ", ";
                $total = $total + ($nbr*$product->price);
                $product =- $nbr;
            }
        }

        if ($total == 0) return redirect()->route('facturation')->withErrors(['msg' => "Erreur : Vous n'avez mis aucun produit."]);

        DB::table("comptes")->insert([
            'discord' => Auth::user()->id,
            'user' => Auth::user()->name,
            'name' => 'Facturation client',
            'montant' => $total,
            'details' => $details,
            'meta' => "{'icon': 'person'}"
        ]);

        return redirect("/facturation");
    }
}
