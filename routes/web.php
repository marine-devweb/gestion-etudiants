<?php

use App\Http\Controllers\EtudiantController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::resource('etudiants', EtudiantController::class);
Route::get('/', [EtudiantController::class, 'liste_etudiant'])->name('liste_etudiants');
Route::get('etudiants/{etudiant}/edit', [EtudiantController::class, 'edit'])->name('edit_liste_etudiants');
