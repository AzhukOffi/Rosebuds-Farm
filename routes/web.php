<?php

use App\Http\Controllers\AnnuaireController;
use App\Http\Controllers\direction\BonsDeLivraisonController;
use App\Http\Controllers\direction\ComptabiliteController;
use App\Http\Controllers\direction\FacturesController;
use App\Http\Controllers\DocumentationController;
use App\Http\Controllers\noAccess;
use App\Http\Controllers\NotesDeFraisController;
use App\Http\Controllers\PDFcontroller;
use App\Http\Controllers\StockController;
use App\Http\Controllers\PointeuseController;
use App\Http\Controllers\StorageController;
use App\Http\Controllers\TeaController;
use App\Http\Controllers\direction\UsersController;
use App\Http\Controllers\VenteController;
use App\Http\Controllers\ComptesController;
use App\Http\Controllers\direction\DirectionHomeController;
use App\Http\Controllers\EntrepriseController;
use App\Http\Controllers\FacturationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\viewPdfController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware('auth')->group(function() {
    Route::get('/noAccess', [NoAccess::class, "index"]);

    Route::middleware('hasAccess')->group(function() {
        Route::get('/', [HomeController::class, "index"]);

        Route::get('/home', [HomeController::class, 'index'])->name('home');

        Route::get('/stock', [StockController::class, "index"])->name("stock");

        Route::get('/startProd/{name}', [StockController::class, "startProd"])->name("startProd");

        Route::post('/updateStock/{name}', [StockController::class, "updateStock"])->name("updateStock");

        Route::get('/pointeuse', [PointeuseController::class, "index"])->name("pointeuse");

        Route::post('/updatePointeuse/{id}', [PointeuseController::class, "updatePointeuse"])->name("updatePointeuse");

        Route::get('/startService', [PointeuseController::class, "startService"])->name("startService");

        Route::get('/endService', [PointeuseController::class, "endService"])->name("endService");

        Route::get('/notes', [NotesDeFraisController::class, "index"])->name("notes");

        Route::post('/addNotes', [NotesDeFraisController::class, "addNotes"])->name("addNotes");

        Route::post('/updateNotes/{id}', [NotesDeFraisController::class, "updateNotes"])->name("updateNotes");

        Route::get('/thé', [TeaController::class, "index"])->name("tea");

        Route::post('/produceTea/{type}', [TeaController::class, "produceTea"])->name("produceTea");

        Route::get('/vente', [VenteController::class, "index"])->name("vente.index");

        Route::post('/vente/{type}', [VenteController::class, "vente"])->name("vente");

        Route::get('/comptes', [ComptesController::class, "index"]);

        Route::get('/facturation', [FacturationController::class, "index"])->name("facturation");

        Route::get('/entreprise', [EntrepriseController::class, "index"]);

        Route::get('/facturation', [FacturationController::class, "index"])->name("facturation");

        Route::post('/facturer', [FacturationController::class, "facturer"]);

        Route::get('/entreprise', [EntrepriseController::class, "index"])->name('entreprise');

        Route::post('/upload', [EntrepriseController::class, "upload"]);

        Route::post('/facturerEntreprise', [EntrepriseController::class, "facturerEntreprise"]);

        Route::get('/contrat/{entreprise}', [EntrepriseController::class, "contrat"])->name("contrat");

        Route::get('/annuaire', [AnnuaireController::class, "index"])->name("annuaire");

        Route::get('/documentation', [DocumentationController::class, "index"])->name("documentation");

        Route::get('/photos/{name}', [StorageController::class, "index"])->name("photos");

        Route::middleware('isAdmin')->group(function() {
            Route::get('/direction', [DirectionHomeController::class, "index"])->name('direction.index');

            Route::get('/direction/comptabilite', [ComptabiliteController::class, "index"])->name('comptabilite.index');

            Route::get('/direction/livraisons', [BonsDeLivraisonController::class, "index"]);

            Route::get('/direction/factures', [FacturesController::class, "index"]);

            Route::get('/direction/users', [UsersController::class, "index"])->name('comptabilite.index');

            Route::post('/updateUser/{id}', [UsersController::class, "updateUser"])->name("updateUser");

            Route::get('/licencier/{id}', [UsersController::class, "licencier"])->name("licencier");

            Route::post('/direction/embaucher', [UsersController::class, "embaucher"])->name("embaucher");
        });
    });

    Route::get('/embauche/{token}', [UsersController::class, "embauche_lien"])->name("embauche_lien");
});

Route::post('/signPDF/{id}', [PDFcontroller::class, "sign"]);

Route::get('/livraisons/{id}', [PDFcontroller::class, "view"]);

Route::get('/pdf/{id}', [PDFcontroller::class, "index"])->name("pdf");

