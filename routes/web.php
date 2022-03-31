<?php

use App\Http\Controllers\AnnunciController;
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
    return view('index');
});

Route::get('/annunci', [AnnunciController::class, 'index'])->name('index.annunci');
Route::get('/inserisci/annuncio', [AnnunciController::class, 'create'])->name('create.annunci');
Route::post('annuncio/inserito', [AnnunciController::class, 'store'])->name('store.annunci');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
