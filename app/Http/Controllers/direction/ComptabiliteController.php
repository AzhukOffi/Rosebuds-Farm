<?php

namespace App\Http\Controllers\direction;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ComptabiliteController extends Controller
{
    public function index()
    {
        if (Auth::user()->rankLevel < 4) return redirect("/")->withErrors(['msg' => "Erreur : Vous n'avez pas accès à cette page."]);


        $comptes = DB::table("comptes")->get()->toJson();
        $fraisDetails = DB::table("frais")->get()->toJson();

        $ca = DB::table("comptes")
            ->select()
            ->sum('montant');

        $pointeuses = DB::table("pointeuses")
            ->select()
            ->sum('salary');

        $compta = DB::table("compta")
            ->select()
            ->get()
            ->sortByDesc("id");

        $frais = DB::table("frais")
            ->select()
            ->sum('montant');



        return view('direction/comptabilite')->with([
            "comptes"=>$comptes,
            "compta"=>$compta,
            'noteDeFrais'=>$frais,
            'noteDeFraisDetails'=>$fraisDetails,
            "ca"=>$ca,
            "depenses"=>$pointeuses
        ]);
    }
}
