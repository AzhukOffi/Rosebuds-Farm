<?php

namespace App\Http\Controllers;

use View;
use Illuminate\Support\Facades\DB;

class AnnuaireController extends Controller
{
    public function index()
    {
        $annuaire = DB::table("annuaire")
            ->select()
            ->get()
            ->toJson();

        return View::make("ferme/annuaire")->with([
            "annuaire"=>$annuaire
        ]);
    }
}
