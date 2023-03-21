<?php

namespace App\Http\Controllers\direction;

use App\Http\Controllers\Controller;
use View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BonsDeLivraisonController extends Controller
{
    public function index()
    {
        if (Auth::user()->rankLevel < 4) return redirect("/")->withErrors(['msg' => "Erreur : Vous n'avez pas accès à cette page."]);

        $livraisons = DB::table("files")
            ->select()
            ->where("type", "livraisons")
            ->get()
            ->sortByDesc("id");
        $vignoble = DB::table("files")
            ->select()
            ->where("type", "livraisons")
            ->where("entreprise", "Vignoble")
            ->get()
            ->sortByDesc("id");
        $resto = DB::table("files")
            ->select()
            ->where("type", "livraisons")
            ->where("entreprise", "Restaurant")
            ->get()
            ->sortByDesc("id");

        return View::make("direction/livraisons")->with([
            "livraisons"=>$livraisons->slice(0, 5),
            "vignoble"=>$vignoble->slice(0, 5),
            "resto"=>$resto->slice(0, 5),
        ]);
    }
}
