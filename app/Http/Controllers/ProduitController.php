<?php

namespace App\Http\Controllers;

use App\Models\Categories;
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
    {   $Auth = Auth::user();
        $user = User::all();
        $produit = Produit::all();
        $fournisseur = fournisseurs::all();
        $categories =Categories::all();
        return view('admin/produit/create', compact('fournisseur', 'user', 'categories'));
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
                'categorie_id'=>['required', 'integer'],
                'marque'=>['required', 'string', 'max:20'],
                'model'=>['required', 'string', 'max:20'],
                'motif'=>['required', 'string', 'max:20'],
                'etat'=>['required', 'string', 'max:225'],
                'note'=>['required', 'string', 'max:225'],        
                'user_id'=>['required', 'integer'],        
                'fournisseur_id'=>['required', 'integer'],        
            ]);

            if($produit)
            { 
                $fournisseur = fournisseurs::all();
                $Auth = Auth::user();
                $user = User::all();
                $stock = Produit::create( 
                    [ 
                        'user_id'=>$request['user_id'],
                        'fournisseur_id'=>$request['fournisseur_id'],
                        'categorie_id'=>$request['categorie_id'],
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
                    ]);
                    
            }
            return redirect('admin/produit/index');
         
        
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
    }/**
     * 
     *
     * @param  \App\Models\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function achat(Produit $produit, $id)
    {
        
        
        return view('admin/produit/index');

    }
}
