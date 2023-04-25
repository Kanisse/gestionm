<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\TacheController;
use App\Http\Controllers\Test;
use App\Http\Controllers\VendeurController;
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

Route::resource('taches', TacheController::class);


Auth::routes();

Route::get('Test', function(){
    return view ('index');
});
Route::get('acceuil', function(){
    return view ('acceuil');
});

Route::get('produitbyclient', 
[App\Http\Controllers\ClientController::class], 'showproduct')
-> name('productbyclient');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('vendeur',VendeurController::class);

Route::get('Csession',[SessionController::class,'creationsession']);
Route::get('Asession',[SessionController::class,'afficherrole']);

Route::resource('clients', ClientController::class);