<?php

namespace App\Http\Controllers;

use App\Models\fournisseurs;
use App\Models\Produit;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produit = Produit::all();
        $fournisseur= Produit::all();
        return view('admin/produit/index', compact('produit', 'fournisseur'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $produit = Produit::all();
        $user = User::all();
        $fournisseur = fournisseurs::all();
        return view('admin/produit/create', compact('fournisseur', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produit = $request->validate([                    
                'categorie'=>['required', 'string', 'max:30'],
                'marque'=>['required', 'string', 'max:20'],
                'model'=>['required', 'string', 'max:20'],
                'motif'=>['required', 'string', 'max:20'],
                'etat'=>['required', 'string', 'max:225'],
                'note'=>['required', 'string', 'max:225'],        
                'user'=>['required', 'integer', 'max:225'],        
                'fournisseur'=>['required', 'integer', 'max:225'],        
            ]);

            if($produit)
            { 
                $fournisseur = fournisseurs::all();
                $Auth = Auth::user();
                $user = User::all();
                $stock = Produit::create( 
                    [ 
                        'user'=>$request['user'],
                        'fournisseur'=>$request['fournisseur'],
                        'categorie'=>$request['categorie'],
                        'marque'=>$request['marque'],
                        'model'=>$request['model'],
                        'motif'=>'Vente',
                        'etat'=>$request['etat'],

                        'quantite'=>$request['quantite'],
                        'QtVendu'=>$request['QtVendu'],
                        'QtRestant'=>$request['QtRestant'],
                        'prix_achat'=>$request['prix_achat'],
                        'prix_vente'=>$request['prix_vente'],
                        'benefice'=>$request['benefice'],
                        'date_achat'=>$request['date_achat'],
                        'date_vente'=>$request['date_vente'],
                        'remarque'=>$request['remarque'],                         
                    ]);
                    
            }
            return redirect('/admin/produit/index');
         
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function show(Produit $produit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function edit(Produit $produit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produit $produit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produit $produit)
    {
        //
    }
}
