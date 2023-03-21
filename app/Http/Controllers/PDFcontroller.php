<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PDFcontroller extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, $type, $entreprise, $file)
    {

        abort_if(
            ! Storage::disk('pdf') ->exists($type."/".$entreprise."/".$file),
            404,
            "The file doesn't exist. Check the path."
        );

        return Storage::disk('pdf')->response($type."/".$entreprise."/".$file);
    }
}
