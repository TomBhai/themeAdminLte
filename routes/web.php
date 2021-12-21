<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlayerController;

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

Route::get('/main', [\App\Http\Controllers\HomeController::class, 'index'])->name('main');

Route::get('/contact', [\App\Http\Controllers\HomeController::class, 'contact'])->name('contact');

Route::get('/players/index', [\App\Http\Controllers\PlayerController::class, 'index'])->name('players.index');
Route::get('/players/show/{id}', [\App\Http\Controllers\PlayerController::class, 'show'])->name('players.show');
Route::post('/players/create', [\App\Http\Controllers\PlayerController::class, 'store'])->name('players.store');
Route::post('/players/update', [\App\Http\Controllers\PlayerController::class, 'update'])->name('players.update');
Route::get('/players/create', [\App\Http\Controllers\PlayerController::class, 'create'])->name('players.create');
Route::get('/players/delete/{id}', [\App\Http\Controllers\PlayerController::class, 'destroy'])->name('players.destroy');

//Route::resources([
//    'player' => PlayerController::class,
//]);
