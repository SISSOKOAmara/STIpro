<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\fournisseurs;
use App\Models\Produit;
use App\Models\Reparations;
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
        $reparation = Reparations::where('etat', 'En cours')->get();
        return view('admin/produit/create', compact('fournisseur', 'user', 'categories','reparation'));
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
                'etat'=>['required', 'string', 'max:225'],       
                'user_id'=>['required', 'integer'],        
                'fournisseur_id'=>['required', 'integer'],        
            ]);

            if($produit)
            { 
                $fournisseur = fournisseurs::all();
                $reparation = Reparations::all();
                $Auth = Auth::user();
                $user = User::all();
                $stock = Produit::create( 
                    [ 
                        'user_id'=>$request['user_id'],
                        'fournisseur_id'=>$request['fournisseur_id'],
                        'categorie_id'=>$request['categorie_id'],
                        'reparation_id'=>$request['reparation_id'],
                        'marque'=>$request['marque'],
                        'model'=>$request['model'],
                        'motif'=>'Vente',
                        'etat'=>$request['etat'],

                        'quantite'=>$request['quantite'],
                        'prix_achat'=>$request['prix_achat'],
                        'prix_vente'=>$request['prix_vente'],
                        'date_vente'=>$request['date_vente'], 
                                   
                    ]);
                    
            }
            return redirect('/produit');
         
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produit= Produit::findOrFail($id);
        $Auth = Auth::user();
        $user = User::all();
        $categories =Categories::all();
        $fournisseur=fournisseurs::all();
        return view('admin.produit.detail', compact('fournisseur', 'user', 'produit', 'categories'));


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
