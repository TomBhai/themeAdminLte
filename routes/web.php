<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PlayersController;
use App\Http\Middleware\Authenticate;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

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
Route::prefix('admin')->group(function() {
    Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('logout/', 'Auth\AdminLoginController@logout')->name('admin.logout');
    Route::get('/', 'Auth\AdminController@index')->name('admin.home');
});

//Route::get('/', function () {
//    return redirect()->route('admin.login');
//});

//Route::view('admin/login', 'admin.auth.login')->name('admin.login');
//
//Route::prefix('/admin')
//    ->middleware('is_admin')
//    ->name('admin.')
//    ->group(function () {
//        Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//        Route::get('/contact', [App\Http\Controllers\PagesController::class, 'contact'])->name('contact');
//
//        Route::resources(['players'=>PlayersController::class]);
//        });


Auth::routes();
Route::get('/logout', [App\Http\Controllers\HomeController::class, 'logout']);

Route::fallback(function () {
    return response()->json('tur ja tur ja 30 di');
});


