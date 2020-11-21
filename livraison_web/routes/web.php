<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\inscriptionController;
use App\Http\Controllers\ExportImportController;


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

Route::get('inscription', [inscriptionController::class, 'create_livreur'])->name('ajouter.livreur');
Route::post('inscription', [inscriptionController::class, 'store_livreur'])->name('ajouter.livreur');

Route::get('Nom', [inscriptionController::class, 'show_livreur'])->name('chercher.livreur.nom');
Route::get('prenom', [inscriptionController::class, 'show_livreur'])->name('chercher.livreur.prenom');
Route::get('mail', [inscriptionController::class, 'show_livreur'])->name('chercher.livreur.email');
Route::get('numero', [inscriptionController::class, 'show_livreur'])->name('chercher.livreur.numero');
Route::get('zone', [inscriptionController::class, 'show_livreur'])->name('chercher.livreur.zone');

Route::get('chercherNom', [inscriptionController::class, 'show_livreur_nom_choisi'])->name('afficher.livreur.chercherNom');
Route::get('chercherPrenom', [inscriptionController::class, 'show_livreur_prenom_choisi'])->name('afficher.livreur.chercherPrenom');
Route::get('chercherEmail', [inscriptionController::class, 'show_livreur_email_choisi'])->name('afficher.livreur.chercherEmail');
Route::get('chercherNum', [inscriptionController::class, 'show_livreur_numero_choisi'])->name('afficher.livreur.chercherNum');
Route::get('chercherZone', [inscriptionController::class, 'show_livreur_zone_choisi'])->name('afficher.livreur.chercherZone');

Route::get('supprimer/{id}', [inscriptionController::class, 'destroy_livreur'])->name('supprimer.livreur');
Route::get('edit/{id}', [inscriptionController::class, 'edit_livreur'])->name('edit.livreur');
Route::post('update', [inscriptionController::class, 'update_livreur'])->name('update.livreur');

Route::get('view', [ExportImportController::class, 'importExportView'])->name('ExportImport.Livreurs');
Route::get('export', [ExportImportController::class, 'export'])->name('export');
Route::get('import', [ExportImportController::class, 'import'])->name('import');



