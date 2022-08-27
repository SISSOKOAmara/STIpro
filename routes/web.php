<?php

use App\Http\Controllers\AppareilsController;
use App\Http\Controllers\ClientsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProduitController;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\ReparationsController;
use App\Http\Controllers\StocksController;
use App\Http\Controllers\TachesController;
use App\Http\Controllers\userController;

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
Auth::routes();
/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/

Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
-------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {
   Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
   Route::get('/admin/appareil/Index', [AppareilsController::class, 'index'])->name('appareilIndex');

//    Route::get('/reparation.index', [HomeController::class, 'repaireView'])->name('reparationIndex');
 
});
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:manager'])->group(function () {
    Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');
});

// Les route des view nav
Route::get('/admin/reparation/index', [ReparationsController::class, 'index'])->name('reparationIndex');
Route::get('/admin/reparation/createA', [ReparationsController::class, 'listeA'])->name('reparationajoutA');
Route::get('/admin/reparation/create1', [ReparationsController::class, 'liste1'])->name('reparationajout1');
Route::post('/admin/reparation/liste', [ReparationsController::class, 'create'])->name('reparationregister');

// Stock
Route::get('/admin/stock/index', [StocksController::class, 'index'])->name('stockindex');
Route::get('/admin/stock/create', [StocksController::class, 'create'])->name('stock.ajout');
Route::post('/admin/stock/liste', [StocksController::class, 'store'])->name('stockregister');


// Produit
Route::get('/admin/produit/index', [ProduitController::class, 'index'])->name('produit.index');
Route::get('/admin/produit/create', [ProduitController::class, 'create'])->name('produit.ajout');
Route::post('/admin/produit/liste', [ProduitController::class, 'store'])->name('produit.register');


// Route Client
Route::get('/admin/client/Index', [ClientsController::class, 'index'])->name('clientIndex');
Route::get('/admin/client/create', [ClientsController::class, 'create'])->name('clientajout');
Route::post('/admin/client/liste', [ClientsController::class, 'store'])->name('clientregister');
Route::get('/admin/client/{id}', [ClientsController::class, 'show'])->name('client.detail');


// Tache
Route::get('/admin/tache/Index', [TachesController::class, 'index'])->name('tache.index');
Route::get('/admin/tache/create', [TachesController::class, 'create'])->name('tache.ajout');
Route::post('/admin/tache/liste', [TachesController::class, 'store'])->name('tache.register');
Route::get('/admin/tache/{id}', [TachesController::class, 'show'])->name('tache.detail');

// User Route
Route::get('/admin/user/index', [userController::class, 'index'])->name('user.index');
Route::get('/user/index/', [userController::class, 'create'])->name('user.create');
Route::post('/admin/user/index/', [userController::class, 'store'])->name('user.store');

Route::get('/admin/user/create/', [userController::class, 'index2'])->name('user.index2');
Route::Post('/admin/user/create/', [userController::class, 'store2'])->name('user.store2');



 