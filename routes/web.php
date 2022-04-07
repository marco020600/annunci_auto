<?php

use App\Http\Controllers\AnnunciController;
use App\Http\Controllers\DettagliController;
use App\Http\Controllers\ImmaginiController;
use App\Models\Annuncio;
use App\Models\Dettagli;
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
    $annunci = Annuncio::all();
    return view('index', ['annunci' => $annunci]);
})->name('index');

//ANNUNCI
Route::get('/annunci', [AnnunciController::class, 'index'])->name('index.annunci');
Route::get('/inserisci/annuncio', [AnnunciController::class, 'create'])->name('create.annunci');
Route::post('annuncio/inserito', [AnnunciController::class, 'store'])->name('store.annunci');
Route::get('annuncio/{id}', [AnnunciController::class, 'show'])->name('show.annuncio');

//DETTAGLI
Route::get('/inserisci/dettagli/{id}', [DettagliController::class, 'create'])->name('create.dettagli');
Route::post('/inserisci/dettagli/{id}', [DettagliController::class, 'store'])->name('store.dettagli');

//IMMAGINI
Route::get('/inserisci/immagini/{id}', [ImmaginiController::class, 'create'])->name('create.immagini');
Route::post('/inserisci/immagini/{id}', [ImmaginiController::class, 'store'])->name('store.immagini');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
