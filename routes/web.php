<?php

use App\Http\Controllers\AchatController;
use App\Http\Controllers\AppareilsController;
use App\Http\Controllers\CategoriesController;
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
    Route::get('/technicien/reparations', [ReparationsController::class, 'index2'])->name('reparationIndex2');

    
Route::get('/technicien/details/{id}/reparations', [ReparationsController::class, 'show2'])->name('reparation.detail2');
Route::get('/technicien/{id}/reparations', [ReparationsController::class, 'edit2'])->name('reparation.edit2');
Route::patch('tachnicien/updt//{id}/reparations', [ReparationsController::class, 'update2'])->name('reparation.update2');

// Ajouter un appareil à partir du client
Route::get('/techn-repation-{id}/clients', [ReparationsController::class, 'liste2'])->name('reparationajout2');
Route::post('/technicien/reparations', [ReparationsController::class, 'store2'])->name('reparationregister2');
// fin

Route::get('/technicien/reparation/attente', [ReparationsController::class, 'attente2'])->name('reparationattente2');
Route::get('/technicien/reparation/Encours', [ReparationsController::class, 'Encours2'])->name('reparationEncours2');
Route::get('/technicien/reparation/Repare', [ReparationsController::class, 'reparfinish2'])->name('reparationRepare2');
 
// Client
Route::get('/technicien/clients', [ClientsController::class, 'index2'])->name('clientIndex2');
Route::get('/technicien/client/plus', [ClientsController::class, 'create2'])->name('clientajout2');
Route::post('/technicien/client/liste', [ClientsController::class, 'store2'])->name('clientregister2');


Route::get('/technicien/liste/tache', [TachesController::class, 'index2'])->name('tache.list2');
Route::get('/technicien/create/tache', [TachesController::class, 'create2'])->name('tache.ajout2');
Route::post('/technicien/liste/tache', [TachesController::class, 'store2'])->name('tache.register2');
// Route::get('/technicien/{id}/tache', [TachesController::class, 'show2'])->name('tache.detail2');
Route::get('/technicien/edit/{id}/tache', [TachesController::class, 'edit2'])->name('tache.edit2');
Route::patch('/technicien/{id}/tache', [TachesController::class, 'update2'])->name('tache.update2');
});   
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
-------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {
   Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
   Route::get('/admin/appareil', [AppareilsController::class, 'index'])->name('appareilIndex');

//    Reparations
    Route::get('/admin/reparation/reparations', [ReparationsController::class, 'index'])->name('reparationIndex');
    Route::get('/admin/reparation/attente', [ReparationsController::class, 'attente'])->name('reparationattente');
    Route::get('/admin/reparation/Encours', [ReparationsController::class, 'Encours'])->name('reparationEncours');
    Route::get('/admin/reparation/Repare', [ReparationsController::class, 'reparfinish'])->name('reparationRepare');

    // Fournisseurs
    Route::get('/fournisseurs', [FournisseursController::class, 'index'])->name('fournisseur');
    Route::get('/fourn/Flist', [FournisseursController::class, 'create'])->name('fournisseur.create');
    Route::post('/fourn/Flist', [FournisseursController::class, 'store'])->name('fournisseur.store');
    Route::delete('/fourn/Flist/{fournisseur}', [FournisseursController::class, 'destroy'])->name('fournisseur.supprimer');

        
    // Route Client
    Route::get('/admin/clients', [ClientsController::class, 'index'])->name('clientIndex');
    Route::get('/admin/client/plus', [ClientsController::class, 'create'])->name('clientajout');
    Route::post('/admin/client/liste', [ClientsController::class, 'store'])->name('clientregister');
    Route::get('/admin/{id}/client', [ClientsController::class, 'show'])->name('client.detail');

//    Route::get('/reparation.index', [HomeController::class, 'repaireView'])->name('reparationIndex');
 
});
/*------------------------------------------
--------------------------------------------
All Manager Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:manager'])->group(function () {
    Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');
    Route::get('/gerant/reparation', [ReparationsController::class, 'index3'])->name('reparationIndex3');


      // Fournisseurs
    Route::get('/fournisseur', [FournisseursController::class, 'index3'])->name('fournisseur3');
    Route::get('/fourn/list', [FournisseursController::class, 'create3'])->name('fournisseur.create3');
    Route::post('/fourn/list', [FournisseursController::class, 'store3'])->name('fournisseur.store3');
    Route::delete('/fourn/list/{fournisseur}', [FournisseursController::class, 'destroy3'])->name('fournisseur.supprimer3');


     // Route Client
     Route::get('/gerant/clients', [ClientsController::class, 'index3'])->name('clientIndex3');
     Route::get('/gerant/client/plus', [ClientsController::class, 'create3'])->name('clientajout3');
     Route::post('/gerant/client/liste', [ClientsController::class, 'store3'])->name('clientregister3');
     Route::get('/gerant/{id}/client', [ClientsController::class, 'show3'])->name('client.detail3');

    // Ajouter un appareil à partir du client
    // Route::get('/repation-{id}/client', [ReparationsController::class, 'ajout3'])->name('reparationajout1.3');
    Route::get('/gest/repation-{id}/clients', [ReparationsController::class, 'form3'])->name('reparationajout3');
    Route::post('/agent/reparations', [ReparationsController::class, 'store3'])->name('reparationregister3');

});

// Les route des view nav
Route::get('/admin/reparation/createA', [ReparationsController::class, 'listeA'])->name('reparationajoutA');
Route::post('/admin/reparation/liste', [ReparationsController::class, 'create'])->name('repair.ad');
// Ajouter un appareil à partir du client
Route::get('/repation-{id}/clients', [ReparationsController::class, 'liste1'])->name('reparationajout1');
Route::post('/admin/reparations', [ReparationsController::class, 'store'])->name('reparationregister1');
// fin
// Route::get('/{Reparations}/reparations', [ReparationsController::class, 'show2'])->name('reparation.detail');
// Route::get('/reparat/', [ReparationsController::class, 'show'])->name('reparation.detail');
Route::get('/admin/details/{id}/reparations', [ReparationsController::class, 'show'])->name('reparation.detail');
Route::get('/admin//fac/{id}/reparations', [ReparationsController::class, 'facture'])->name('reparation.facture');
Route::get('/admin/{id}/reparations', [ReparationsController::class, 'edit'])->name('reparation.edit');
Route::patch('/{id}/reparations', [ReparationsController::class, 'update'])->name('reparation.update');
// Route::get('/admin/reparation/delete/{id}', [ReparationsController::class, 'destroy'])->name('reparation.destroy');
Route::delete('/admin/reparation/delete/{reparation}', [ReparationsController::class, 'destroy2'])->name('reparation.supprimer');
// Route::get('/admin/reparation/indexb', [ReparationsController::class,'index3'])->name('index2');


// Stock
Route::get('/admin/stock', [StocksController::class, 'index'])->name('stockindex');
Route::get('/admin/stock', [StocksController::class, 'create'])->name('stock.ajout');
Route::post('/admin/stock', [StocksController::class, 'store'])->name('stockregister');

// Produit
Route::get('admin/produit', [ProduitController::class, 'index'])->name('produit');
Route::get('admin/create/produit', [ProduitController::class, 'create'])->name('produit.ajout');
Route::get('admin/produit/{id}/details', [ProduitController::class, 'show'])->name('produit.show');
Route::get('/produit/{id}/edit', [ProduitController::class, 'edit'])->name('produit.edit');
Route::patch('/produit/{id}/update', [ProduitController::class, 'update'])->name('produit.update');
Route::post('/admin/produit', [ProduitController::class, 'store'])->name('produit.register');
Route::delete('/admin/produit/delete/{produits}', [ProduitController::class, 'destroy2'])->name('produit.supprimer');

Route::get('/admin/produit/liste/{id}', [ProduitController::class, 'achat'])->name('produit.acha');




// Tache
Route::get('/admin/tache', [TachesController::class, 'index'])->name('tache.list');
Route::get('/admin/create/tache', [TachesController::class, 'create'])->name('tache.ajout');
Route::post('/admin/liste/tache', [TachesController::class, 'store'])->name('tache.register');
// Route::get('/admin/{id}/tache', [TachesController::class, 'show'])->name('tache.detail');
Route::get('/admin/edit/{id}/tache', [TachesController::class, 'edit'])->name('tache.edit');
Route::patch('/admin/{id}/tache', [TachesController::class, 'update'])->name('tache.update');
Route::delete('/admin/{taches}', [TachesController::class, 'destroy'])->name('tache.supprimer');

// User
Route::get('/comptes', [userController::class, 'index'])->name('user.index');
Route::get('/admin/comptes/', [userController::class, 'create'])->name('user.create');
Route::get('/user/compte', [userController::class, 'profil'])->name('user.profil');
Route::post('/admin/user/indexU/', [userController::class, 'store'])->name('user.store');

Route::get('/admin/user/create/', [userController::class, 'index2'])->name('user.index2');
Route::Post('/admin/user/create/', [userController::class, 'store2'])->name('user.store2');



 // Categorie
Route::get('/Categorie', [CategoriesController::class, 'index'])->name('categorie');
Route::get('/cat/list/', [CategoriesController::class, 'create'])->name('cat.create');
Route::post('/cat/list/', [CategoriesController::class, 'store'])->name('cat.store');

// Achat
Route::get('/achat/{id}/produit', [AchatController::class, 'create'])->name('achat.create');
Route::post('achat-register', [AchatController::class, 'store'])->name('achat.store');
 