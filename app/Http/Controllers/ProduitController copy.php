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
        return view('admin/produit/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $fournisseur= fournisseurs::all();
        $Auth = Auth::user();
        $user = User::all();

        $produit = $request->validate(
            [         'user'=>$request['user'],
                    'fournisseur'=>$request['fournisseur'],
                    'categorie'=>$request['categorie'],
                    'marque'=>$request['marque'],
                    'model'=>$request['model'],
                    'motif'=>$request['motif'],
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
            ]
        );

             Produit::create($produit);
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
