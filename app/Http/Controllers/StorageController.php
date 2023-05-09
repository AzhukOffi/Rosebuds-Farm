<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class StorageController extends Controller
{
    public function index($name)
    {
        abort_if(
            !Storage::disk('photos') ->exists($name),
            404,
            "Le fichier est introuvable."
        );

        return Storage::disk('photos')->response($name);
    }
}
