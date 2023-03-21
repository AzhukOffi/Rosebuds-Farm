<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use View;

class PostsController extends Controller
{
    public function index()
    {
        return View::make("dashboard")->with('carottes', 500);
    }
}
