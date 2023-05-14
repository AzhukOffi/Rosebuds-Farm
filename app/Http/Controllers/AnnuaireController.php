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
    public function addAnnuaire()
    {
        $name = request("name");
        $numero = request("numero");
        $entreprise = request("entreprise");
        $details = request("details");

        if ($name == null) return redirect()->route('annuaire')->withErrors(['msg' => "Erreur : Veuillez entrer un nom."]);
        if ($numero == null) $numero = "";
        if ($details == null) $details = "";

        DB::table("annuaire")
            ->insert(['name' => $name,'numero' => $numero,'entreprise' => $entreprise,'details' => $details]);

        return redirect("/annuaire");
    }
    public function editAnnuaire($id)
    {
        $name = request("name");
        $numero = request("numero");
        $entreprise = request("entreprise");
        $details = request("details");

        if ($name == null) return redirect()->route('annuaire')->withErrors(['msg' => "Erreur : Veuillez entrer un nom."]);
        if ($numero == null) $numero = "";
        if ($details == null) $details = "";

        DB::table("annuaire")
            ->where("id", $id)
            ->update(['name' => $name,'numero' => $numero,'entreprise' => $entreprise,'details' => $details]);

        return redirect("/annuaire");
    }
    public function removeAnnuaire($id)
    {
        if ($id == null) return redirect()->route('annuaire')->withErrors(['msg' => "Erreur : Une erreur est survenue."]);

        DB::table("annuaire")
            ->where("id", $id)
            ->delete();

        return redirect("/annuaire");
    }
}
