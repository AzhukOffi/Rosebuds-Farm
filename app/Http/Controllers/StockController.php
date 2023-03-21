<?php

namespace App\Http\Controllers;

use View;
use Illuminate\Support\Facades\DB;

class StockController extends Controller
{
    public function index()
    {
        $stock = DB::table("stock")
            ->select()
            ->where("stock", '!=', -1)
            ->get()
            ->sortBy("id");

        $teas = DB::table("teas")
            ->select()
            ->where("stock", '!=', -1)
            ->get()
            ->sortBy("id");

        $stocks = $stock->merge($teas);

        return View::make("stock")->with([
            "stocks"=>$stocks,
            "date"=>now()
        ]);
    }
    public function startProd($stock)
    {
        DB::table("stock")
        ->where("name", $stock)
        ->update(['startAt' => now()->addHours(1)]);

        return redirect("/stock");
    }
    public function updateStock($type)
    {
        $amount = request("stock");
        if ($amount == null || is_int($amount)) return redirect()->route('stock')->withErrors(['msg' => "Erreur : Veuillez entrez un nombre valide."]);

        if (str_contains($type, "Thé") || $type == "Bouteilles en verre") {
            DB::table("teas")
            ->where("name", $type)
            ->update(['stock' => $amount]);
        } else {
            DB::table("stock")
            ->where("name", $type)
            ->update(['stock' => $amount]);
        }



        return redirect("/stock");
    }
}
