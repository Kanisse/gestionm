<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\Test;
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
    return Redirect() -> route('login');
});



Auth::routes();

Route::get('produitbyclient', 
[App\Http\Controllers\ClientController::class], 'showproduct')
-> name('productbyclient');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
