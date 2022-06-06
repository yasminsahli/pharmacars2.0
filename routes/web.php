<?php

use App\Http\Controllers\AddVisit;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\Home;
use App\Http\Controllers\Visiteur;
use App\Http\Controllers\Vehicule;
use App\Http\Controllers\Formulaire;
use App\Http\Controllers\ModifFormu;
use App\Http\Controllers\SupprFormu;
use App\Http\Controllers\SupprVehi;
use App\Http\Controllers\SupprVisit;
use App\Http\Controllers\ModifVehi;
use App\Http\Controllers\ModifVisit;
use App\Http\Controllers\AddVehi;
use App\Http\Controllers\AddFormu;
use App\Http\Controllers\BookFormu;

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

Route::get('/', function () {
    return view('auth/login');
})->name("goHome");

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/', [Home::class, "show"])->name("goHome");

Route::get('/visiteur', [Visiteur::class, "show"])->name("goVisiteur");

Route::get('/vehicule', [Vehicule::class, "show"])->name("goVehicule");

Route::get('/formulaire', [Formulaire::class, "show"])->name("goFormulaire");

Route::get('/supprimervisiteur', [SupprVisit::class, "show"])->name("goSupprVisit");

Route::get('/supprimervehicule', [SupprVehi::class, "show"])->name("goSupprVehi");

Route::get('/supprimerformulaire', [SupprFormu::class, "show"])->name("goSupprFormu");

Route::get('/modifvehicule', [ModifVehi::class, "show"])->name("goModifVehi");

Route::get('/modifvisiteur', [ModifVisit::class, "show"])->name("goModifVisit");

Route::get('/modifformulaire', [ModifFormu::class, "show"])->name("goModifFormu");

Route::get('/addvisiteur', [AddVisit::class, "show"])->name("goAddVisit");

Route::get('/addvehicule', [AddVehi::class, "show"])->name("goAddVehi");

Route::get('/addformulaire', [AddFormu::class, "show"])->name("goAddFormu");

Route::get('/booking', [BookFormu::class, "show"])->name("goBookFormu");

Route::get('vehiculeSearch', [Vehicule::class, 'search'])->name("goVehiculeSearch");

Route::get('visiteurSearch', [Visiteur::class, 'search'])->name("goVisiteurSearch");

Route::get('formulaireSearch', [Formulaire::class, 'search'])->name("goFormulaireSearch");

//create
Route::post('/addvisiteur', [AddVisit::class, "create"])->name("goAddVisit");

//update
Route::get('/modifvisiteur/{modifvisiteur}', [Visiteur::class, "upd"])->name("goModifVisit");
Route::post('/modifvisiteur', [Visiteur::class, "modif"])->name("goModifVisit");

//delete
Route::delete('/supprimervisiteur', [SupprVisit::class, "show"])->name("goSupprVisit");
