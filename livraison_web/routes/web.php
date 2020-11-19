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

Route::get('inscription', [inscriptionController::class, 'create_livreur']);
Route::post('inscription', [inscriptionController::class, 'store_livreur']);
Route::get('Nom', [inscriptionController::class, 'show_livreur_nom']);
Route::get('chercher', [inscriptionController::class, 'show_livreur_nom_choisi']);
Route::get('supprimer/{id}', [inscriptionController::class, 'destroy_livreur']);




//Route::get('/inscription', 'inscription@create');
//Route::post('/inscription', 'inscription@incription_livreur');
    //return view('inscription');



//Route::post('/inscription', function () {
  //  return 'Formulaire reçu';
//});


