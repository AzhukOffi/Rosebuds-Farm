<?php

namespace App\Http\Controllers\direction;

use App\Http\Controllers\Controller;
use View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FacturesController extends Controller
{
    public function index()
    {
        if (Auth::user()->rankLevel < 4) return redirect("/")->withErrors(['msg' => "Erreur : Vous n'avez pas accès à cette page."]);

        $other = DB::table("files")
            ->select()
            ->where("type", "factures")
            ->where("entreprise", "!=", "Bennys")
            ->where("entreprise", "!=", "Vignoble")
            ->where("entreprise", "!=", "Restaurant")
            ->get()
            ->sortByDesc("id");
        $bennys = DB::table("files")
            ->select()
            ->where("type", "factures")
            ->where("entreprise", "Bennys")
            ->get()
            ->sortByDesc("id");
        $vignoble = DB::table("files")
            ->select()
            ->where("type", "factures")
            ->where("entreprise", "Vignoble")
            ->get()
            ->sortByDesc("id");
        $resto = DB::table("files")
            ->select()
            ->where("type", "factures")
            ->where("entreprise", "Restaurant")
            ->get()
            ->sortByDesc("id");



        return View::make("direction/factures")->with([
            "bennys"=>$bennys,
            "vignoble"=>$vignoble,
            "resto"=>$resto,
            "others"=>$other,
        ]);
    }
}
