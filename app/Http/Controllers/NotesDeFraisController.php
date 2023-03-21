<?php

namespace App\Http\Controllers;

use View;
use Auth;
use Illuminate\Support\Facades\DB;

class NotesDeFraisController extends Controller
{
    public function index()
    {
        $notes = DB::table("frais")
            ->select()
            ->where("discord", Auth::user()->id)
            ->get()
            ->sortByDesc("timestamp");

        return View::make("notes")->with([
            "notes"=>$notes,
            "date"=>now()
        ]);
    }
    public function addNotes()
    {
        $type = request("type");
        $montant = request("montant");

        if ($montant == null || is_int($montant)) return redirect()->route('notes')->withErrors(['msg' => "Erreur : Veuillez entrez un nombre valide."]);

        DB::table("frais")
            ->insert(['discord' => Auth::user()->id, 'user' => Auth::user()->name, 'type' => $type, 'montant' => $montant]);

        return redirect("notes");
    }
    public function updateNotes($id)
    {
        $type = request("type");
        $montant = request("montant");

        if ($montant == null || is_int($montant)) return redirect()->route('notes')->withErrors(['msg' => "Erreur : Veuillez entrez un nombre valide."]);

        DB::table("frais")
            ->where("id", $id)
            ->update(['discord' => Auth::user()->id, 'user' => Auth::user()->name, 'type' => $type, 'montant' => $montant]);

        return redirect("notes");
    }
}
