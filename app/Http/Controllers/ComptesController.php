<?php

namespace App\Http\Controllers;

use View;
use Illuminate\Support\Facades\DB;
use Auth;

class ComptesController extends Controller
{
    public function index()
    {
        $comptes = DB::table("comptes")
            ->select()
            ->where("discord", Auth::user()->id)
            ->get()
            ->toJson();

        return View::make("ferme/comptes")->with([
            "comptes"=>$comptes,
            "date"=>now(),
            "semaine"=>now()->format("W")
        ]);
    }
}
