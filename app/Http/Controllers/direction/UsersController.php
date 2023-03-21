<?php

namespace App\Http\Controllers\direction;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use View;

class UsersController extends Controller
{
    public function index()
    {
        if (Auth::user()->rankLevel < 4) return redirect("/")->withErrors(['msg' => "Erreur : Vous n'avez pas accès à cette page."]);

        $users = DB::table("users")
            ->select()
            ->where("allowed", 1)
            ->get()
            ->sortByDesc("id");

        return View::make("direction/users")->with([
            "users"=>$users,
            "date"=>now(),
        ]);
    }
    public function updateUser(Request $request, $id)
    {
        if (Auth::user()->rankLevel < 5) return redirect("/")->withErrors(['msg' => "Erreur : Vous n'avez pas accès à cette page."]);

        $user = DB::table("users")
            ->select()
            ->where("id", $id)
            ->get()
            ->first();

        $rank = "Erreur";
        $salary = 250;
        $sex = $request->input("sex");



        switch ($request->input("rank")) {
            case 0:
                if ($sex == 0 ) $rank = "Apprenti";
                else $rank = "Apprentie";
                $salary = 250;
                break;
            case 1:
                if ($sex == 0 ) $rank = "Ouvrier agricole";
                else $rank = "Ouvrière agricole";
                $salary = 325;
                break;
            case 2:
                if ($sex == 0 ) $rank = "Maraicher";
                else $rank = "Maraichère";
                $salary = 350;
                break;
            case 3:
                if ($sex == 0 ) $rank = "Ingénieur agronome";
                else $rank = "Ingénieure agronome";
                $salary = 400;
                break;
            case 4:
                if ($sex == 0 ) $rank = "Chef de Culture";
                else $rank = "Cheffe de Culture";
                $salary = 425;
                break;
            case 5:
                if ($sex == 0 ) $rank = "Directeur";
                else $rank = "Directrice";
                $salary = 450;
                break;
        }

        DB::table("users")
            ->where("id", $id)
            ->update(['rankLevel' => $request->input("rank"),'rank' => $rank,'salary' => $salary, 'sex' => $sex]);


        if ($request->hasFile("photo")) {
            $destination = "public/photos";
            $image = $request->file("photo");
            $path = $request->file("photo")->storeAs($destination, $user->name . ".png");
        }

        return redirect("/direction/users");
    }
    public function licencier($id)
    {
        if (Auth::user()->rankLevel < 5) return redirect("/")->withErrors(['msg' => "Erreur : Vous n'avez pas accès à cette page."]);

        if (Auth::user()->id == $id) return redirect("/direction/users")->withErrors(['msg' => "Erreur : Vous ne pouvez pas vous auto-licencier."]);

        DB::table("users")
            ->where("id", $id)
            ->update(['rankLevel' => 0,'rank' => "Apprenti",'salary' => 250, 'allowed' => 0]);

        return redirect("/entreprise");
    }
    public function embaucher()
    {
        if (Auth::user()->rankLevel < 5) return redirect("/")->withErrors(['msg' => "Erreur : Vous n'avez pas accès à cette page."]);
        if(request("sex")) $sex = "Apprentie";
        else $sex = "Apprenti";

        DB::table("users")
            ->insert(['id'=>request("id"), 'sex'=>(int)request("sex"), 'name'=>request("name"), 'rankLevel' => 0,'rank' => $sex,'salary' => 250, 'allowed' => 1]);

        return redirect("/direction/users");
    }
}
