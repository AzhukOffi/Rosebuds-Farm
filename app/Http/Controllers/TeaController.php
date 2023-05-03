<?php

namespace App\Http\Controllers;

use View;
use Illuminate\Support\Facades\DB;

class TeaController extends Controller
{
    public function index()
    {
        $teas = DB::table("teas")
            ->select()
            ->get()
            ->sortBy("id");

        $livraisons = DB::table("livraisons")
            ->select()
            ->get();

        return View::make("ferme/tea")->with([
            "infos"=>$teas,
            "livraisons"=>$livraisons
        ]);
    }
    public function produceTea($type)
    {
        $amount = request("amount");
        if ($amount == null || is_int($amount)) return redirect()->route('tea')->withErrors(['msg' => "Erreur : Veuillez entrez un nombre valide."]);


        switch ($type) {
            case "citron":
                DB::table("stock")
                    ->where("name", "Citrons")
                    ->update(['stock' => DB::raw('stock - ' . $amount)]);
                DB::table("stock")
                    ->where("name", "Feuilles de thé")
                    ->update(['stock' => DB::raw('stock - ' . 3*$amount)]);
                DB::table("teas")
                    ->where("name", "Bouteilles en verre")
                    ->update(['stock' => DB::raw('stock - ' . $amount)]);
                DB::table("teas")
                    ->where("name", "Thé au citron")
                    ->update(['stock' => DB::raw('stock + ' . $amount)]);
                break;
            case "rouge":
                DB::table("stock")
                    ->where("name", "Framboises")
                    ->update(['stock' => DB::raw('stock - ' . $amount)]);
                DB::table("stock")
                    ->where("name", "Fraises")
                    ->update(['stock' => DB::raw('stock - ' . $amount)]);
                DB::table("stock")
                    ->where("name", "Feuilles de thé")
                    ->update(['stock' => DB::raw('stock - ' . 3*$amount)]);
                DB::table("teas")
                    ->where("name", "Bouteilles en verre")
                    ->update(['stock' => DB::raw('stock - ' . $amount)]);
                DB::table("teas")
                    ->where("name", "Thé aux fruits rouges")
                    ->update(['stock' => DB::raw('stock + ' . $amount)]);
                break;
            case "peche":
                DB::table("stock")
                    ->where("name", "Pêches")
                    ->update(['stock' => DB::raw('stock - ' . 2*$amount)]);
                DB::table("stock")
                    ->where("name", "Feuilles de thé")
                    ->update(['stock' => DB::raw('stock - ' . $amount)]);
                DB::table("teas")
                    ->where("name", "Bouteilles en verre")
                    ->update(['stock' => DB::raw('stock - ' . $amount)]);
                DB::table("teas")
                    ->where("name", "Thé glacé à la pêche")
                    ->update(['stock' => DB::raw('stock + ' . $amount)]);
                break;
            case "menthe":
                DB::table("stock")
                    ->where("name", "Menthes")
                    ->update(['stock' => DB::raw('stock - ' . $amount)]);
                DB::table("stock")
                    ->where("name", "Feuilles de thé")
                    ->update(['stock' => DB::raw('stock - ' . 3*$amount)]);
                DB::table("teas")
                    ->where("name", "Bouteilles en verre")
                    ->update(['stock' => DB::raw('stock - ' . $amount)]);
                DB::table("teas")
                    ->where("name", "Thé à la menthe")
                    ->update(['stock' => DB::raw('stock + ' . $amount)]);
                break;
            case "vert":
                DB::table("stock")
                    ->where("name", "Feuilles de thé")
                    ->update(['stock' => DB::raw('stock - ' . 5*$amount)]);
                DB::table("teas")
                    ->where("name", "Bouteilles en verre")
                    ->update(['stock' => DB::raw('stock - ' . $amount)]);
                DB::table("teas")
                    ->where("name", "Thé vert")
                    ->update(['stock' => DB::raw('stock + ' . $amount)]);
                break;
        }

        return redirect("/thé");
    }
}
