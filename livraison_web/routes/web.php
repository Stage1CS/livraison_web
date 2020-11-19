<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


use App\Http\Controllers\inscriptionController;

Route::get('inscription', [inscriptionController::class, 'create_livreur'])->name('ajouter.livreur');
Route::post('inscription', [inscriptionController::class, 'store_livreur'])->name('ajouter.livreur');
Route::get('Nom', [inscriptionController::class, 'show_livreur_nom'])->name('chercher.livreur.nom');
Route::get('prenom', [inscriptionController::class, 'show_livreur_nom'])->name('chercher.livreur.nom');
Route::get('mail', [inscriptionController::class, 'show_livreur_nom'])->name('chercher.livreur.prenom');
Route::get('numero', [inscriptionController::class, 'show_livreur_nom'])->name('chercher.livreur.mail');
Route::get('zone', [inscriptionController::class, 'show_livreur_nom'])->name('chercher.livreur.zone');
Route::get('chercher', [inscriptionController::class, 'show_livreur_nom_choisi'])->name('afficher.livreur.chercher');
Route::get('supprimer/{id}', [inscriptionController::class, 'destroy_livreur'])->name('supprimer.livreur');



