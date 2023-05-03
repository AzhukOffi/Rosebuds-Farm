<?php

namespace App\Http\Controllers\direction;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DirectionHomeController extends Controller
{
    public function index(Request $request)
    {


        $comptes = DB::table("comptes")->get()->toJson();
        $ca = DB::table("comptes")
            ->select()
            ->sum('montant');

        $pointeuses = DB::table("pointeuses")
            ->select()
            ->sum('salary');

        return view('direction/home')->with([
            "comptes"=>$comptes,
            "ca"=>$ca,
            "depenses"=>$pointeuses
        ]);
    }
}
