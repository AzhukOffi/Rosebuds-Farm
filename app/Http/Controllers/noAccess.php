<?php

namespace App\Http\Controllers;

use View;

class noAccess extends Controller
{
    public function index()
    {
        return View::make("noAccess");
    }
}
