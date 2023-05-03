<?php

namespace App\Http\Controllers;

use setasign\Fpdi\Fpdi;
use View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PDFcontroller extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $pdf = DB::table("files")
            ->select()
            ->where("fileID", $id)
            ->limit(1)
            ->get();

        if ($pdf[0]->publicAccess == 0) return redirect("/noAccess");

        abort_if(
            !Storage::disk('pdf') ->exists($pdf[0]->path),
            404,
            "Le fichier est introuvable."
        );

        return Storage::disk('pdf')->response($pdf[0]->path);
    }
    public function view($id)
    {
        $pdf = DB::table("files")
            ->select()
            ->where("fileID", $id)
            ->limit(1)
            ->get();

        if ($pdf[0]->publicAccess == 0) return redirect("/noAccess");
        if ($pdf[0]->type == "livraisons") return redirect("pdf/" . $id);

        return View::make("viewPDF")->with([
            "id"=>$id
        ]);
    }
    public function sign($id)
    {
        $id = str_replace(".pdf", "", $id);
        $pdf = DB::table("files")
            ->select()
            ->where("fileID", $id)
            ->limit(1)
            ->get();

        if ($pdf[0]->publicAccess == 0) return redirect("/noAccess");

        $fpdi = new Fpdi;
        $fpdi->setSourceFile(storage_path("app/pdf/" . $pdf[0]->path));
        $file = $fpdi->importPage(1);
        $size = $fpdi->getTemplateSize($file);
        $fpdi->AddFont('Bachelorette','','Bachelorette.php');
        $fpdi->AddPage($size['orientation'], array($size['width'], $size['height']));
        $fpdi->useTemplate($file);
        $fpdi->SetFont("Bachelorette", "", 25);
        $fpdi->SetTextColor(0,0,0);
        $left = (84 -  $fpdi->GetStringWidth(request("name"))) / 2 + 21;
        $top = 237;
        $text = request("name");
        $fpdi->Text($left,$top,$text);

        $fileDir = "livraisons/" . $pdf[0]->Entreprise . "/" . $pdf[0]->fileID . ".pdf";

        $fpdi->Output(storage_path("app/pdf/" . $fileDir), 'F');

        DB::table("files")
            ->select()
            ->where("fileID", $id)
            ->update(["type"=>"livraisons", "path"=> $fileDir]);

        return redirect("pdf/" . $id);
    }
}
