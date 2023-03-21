<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use View;
use function Symfony\Component\String\length;

class HomeController extends Controller
{
    public function index()
    {
        $users = DB::table("users")
            ->select()
            ->where("allowed", 1)
            ->where("rankLevel", "!=", "5")
            ->get()
            ->sortByDesc("id");

        $directions = DB::table("users")
            ->select()
            ->where("allowed", 1)
            ->where("rankLevel", "5")
            ->get()
            ->sortByDesc("id");

        $usersSorted[] = [];
        if (count($users->all()) != 0) {
            $size = count($users->all());
            $step = 3;

            $count = ceil($size / $step);
            $chunk = floor($size / $count);
            $bonus = $size % $count;

            for ($i = 0; $i < $count; $i++) {
                $usersSorted[] =
                    $i == 0 ?
                        array_slice($users->all(), $i * $chunk, $chunk + $bonus) :
                        array_slice($users->all(), $i * $chunk + $bonus, $chunk);
            }
        }

        return View::make("home")->with([
            "users"=>$usersSorted,
            "directions"=>$directions,
            "date"=>now()
        ]);
    }
}
