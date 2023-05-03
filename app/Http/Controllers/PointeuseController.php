<?php

namespace App\Http\Controllers;

use View;
use Illuminate\Support\Facades\DB;
use DateInterval;
use Auth;
use Carbon\Carbon;

class PointeuseController extends Controller
{
    public function index()
    {
        $pointeuses = DB::table("pointeuses")
            ->select()
            ->where("user", Auth::user()->id)
            ->get()
            ->sortByDesc("id");

        return View::make("ferme/pointeuse")->with([
            "pointeuses"=>$pointeuses,
            "date"=>now()
        ]);
    }
    public function startService()
    {
        $startPointeuse = DB::table("pointeuses")
            ->where("user", Auth::user()->id)
            ->where("end", date_create("2000-01-01"))
            ->get();

        if (count($startPointeuse) > 0) return redirect()->route('pointeuse')->withErrors(['msg' => "Erreur : Vous êtes déjà en service"]);

        DB::table("pointeuses")
            ->insert(['user' => Auth::user()->id, 'start' => now()]);

        return redirect("/pointeuse");
    }
    public function endService()
    {
        $salary = 0;
        $startPointeuse = DB::table("pointeuses")
            ->where("user", Auth::user()->id)
            ->where("end", date_create("2000-01-01"))
            ->get();

        if (count($startPointeuse) == 0) return redirect()->route('pointeuse')->withErrors(['msg' => "Erreur : Vous n'êtes pas en service"]);

        $start = date_create($startPointeuse[0]->start);




        while (true) {
            switch($start->format('i')) {
                case 00:
                case 15:
                case 30:
                case 45:
                    $salary = $salary + 1;
                    break;
            }

            if ($start->format('H') == now()->format('H') && $start->format('i') == now()->format('i')) break;
            $start->add(new DateInterval('PT1M'));
            if ($start > now()) break;
        }

        $diff = date_diff(date_create(),date_create($startPointeuse[0]->start));

        $salary = $salary*Auth::user()->salary;


        DB::table("pointeuses")
            ->where("user", Auth::user()->id)
            ->where("end", date_create("2000-01-01"))
            ->update(['end' => now(), 'time' => $diff->format('%H:%I'), 'salary' => $salary ]);



        return redirect("/pointeuse");
    }
    public function updatePointeuse($id)
    {
        $salary = 0;
        $startPointeuse = DB::table("pointeuses")
            ->where("user", Auth::user()->id)
            ->where("id", $id)
            ->get();

        $startHour = explode(":", request("start"));
        $start = new Carbon($startPointeuse[0]->start);

        $start->hour = $startHour[0];
        $start->minute = $startHour[1];

        $dateForSalary = new Carbon($start);

        $endHour = explode(":", request("end"));
        $end = new Carbon(now());
        $end->hour = $endHour[0];
        $end->minute = $endHour[1];

        while (true) {
            switch($dateForSalary->format('i')) {
                case 00:
                case 15:
                case 30:
                case 45:
                    $salary = $salary + 1;
                    break;
            }

            $dateForSalary->add(new DateInterval('PT1M'));

            if ($dateForSalary->format('h') == $end->format('h') && $dateForSalary->format('i') == $end->format('i')) break;
            if ($dateForSalary >= $end) break;
        }


        $diff = date_diff(date_create($start),date_create($end));

        $salary = $salary*Auth::user()->salary;


        DB::table("pointeuses")
            ->where("user", Auth::user()->id)
            ->where("id", $id)
            ->update(['start' => $start, 'end' => $end, 'time' => $diff->format('%H:%I'), 'salary' => $salary ]);



        return redirect("/pointeuse");
    }

}
