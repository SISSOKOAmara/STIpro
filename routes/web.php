<?php

use App\Http\Controllers\AppareilsController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\FournisseursController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\ReparaController;
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
   Route::get('/admin/appareil', [AppareilsController::class, 'index'])->name('appareilIndex');



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
Route::post('/admin/reparation/liste', [ReparationsController::class, 'create'])->name('reparationregister');
// Ajouter un appareil à partir du client
Route::get('/admin/reparation/create1/{id}', [ReparationsController::class, 'liste1'])->name('reparationajout1');
Route::post('/admin/reparation/liste', [ReparationsController::class, 'store'])->name('reparationregister1');
// fin
Route::get('/admin/reparation/detail/{id}', [ReparationsController::class, 'show'])->name('reparation.detail');
Route::get('/admin/reparation/{id}', [ReparationsController::class, 'show'])->name('reparation.detail');
Route::get('/admin/reparation/edit/{id}', [ReparationsController::class, 'edit'])->name('reparation.edit');
Route::patch('/admin/reparation/update/{id}', [ReparationsController::class, 'update'])->name('reparation.update');
Route::get('/admin/reparation/delete/{id}', [ReparationsController::class, 'destroy'])->name('reparation.destroy');
Route::delete('/admin/reparation/delete/{reparation}', [ReparationsController::class, 'destroy2'])->name('reparation.supprimer');
// Route::get('/admin/reparation/indexb', [ReparationsController::class,'index3'])->name('index2');


// Stock
Route::get('/admin/stock/index', [StocksController::class, 'index'])->name('stockindex');
Route::get('/admin/stock/create', [StocksController::class, 'create'])->name('stock.ajout');
Route::post('/admin/stock/liste', [StocksController::class, 'store'])->name('stockregister');

// Produit
Route::get('/produit', [ProduitController::class, 'index'])->name('produit');
Route::get('/create/produit', [ProduitController::class, 'create'])->name('produit.ajout');
Route::post('/admin/produit/liste', [ProduitController::class, 'store'])->name('produit.register');


// Route Client
Route::get('/admin/client/IndexC', [ClientsController::class, 'index'])->name('clientIndex');
Route::get('/admin/client/create', [ClientsController::class, 'create'])->name('clientajout');
Route::post('/admin/client/liste', [ClientsController::class, 'store'])->name('clientregister');
Route::get('/admin/client/{id}', [ClientsController::class, 'show'])->name('client.detail');


// Tache
Route::get('/admin/tache/listT', [TachesController::class, 'index'])->name('tache.list');
Route::get('/user/tache/Index', [TachesController::class, 'index2'])->name('usertache.index');
Route::get('/admin/tache/create', [TachesController::class, 'create'])->name('tache.ajout');
Route::post('/admin/tache/liste', [TachesController::class, 'store'])->name('tache.register');
Route::get('/tache/{id}', [TachesController::class, 'show'])->name('tache.detail');
Route::get('/tache/edit/{id}', [TachesController::class, 'edit'])->name('tache.edit');
Route::patch('/admin/tache/update/{id}', [TachesController::class, 'update'])->name('tache.update');

// User
Route::get('/comptes', [userController::class, 'index'])->name('user.index');
Route::get('/user/indexU/', [userController::class, 'create'])->name('user.create');
Route::post('/admin/user/indexU/', [userController::class, 'store'])->name('user.store');

Route::get('/admin/user/create/', [userController::class, 'index2'])->name('user.index2');
Route::Post('/admin/user/create/', [userController::class, 'store2'])->name('user.store2');

// Fournisseurs
Route::get('/admin/fourn/listF', [FournisseursController::class, 'index'])->name('fournisseur');
Route::get('admin/fourn/create', [FournisseursController::class, 'index'])->name('fournisseur.create');

 