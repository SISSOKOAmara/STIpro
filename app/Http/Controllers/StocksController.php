<?php

namespace App\Http\Controllers;

use App\Models\Appareils;
use App\Models\Fournisseur;
use App\Models\fournisseurs;
use App\Models\Stocks;
use Illuminate\Http\Request;

class StocksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stock = Stocks::all();
        $fournisseur= fournisseurs::all();
        return view('admin/stock/index', compact('stock', 'fournisseur'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $stok = Stocks::all();
        return view('admin/stock/create');
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
        $stock = $request->validate(
            [                    
                'categorie'=>['required', 'string', 'max:30'],
                'marque'=>['required', 'string', 'max:20'],
                'model'=>['required', 'string', 'max:20'],
                'motif'=>['required', 'string', 'max:20'],
                'etat'=>['required', 'string', 'max:225'],
                'note'=>['required', 'string', 'max:225'],        
            ]
        );
        if ($stock)
        {
            $appareils = Appareils::create(
                [
                'categorie'=>$request['categorie'],
                'marque'=>$request['marque'],
                'model'=>$request['model'],
                'motif'=>$request['motif'],
                'etat'=>$request['etat'],
                'note'=>$request['note'],
                ]
            );

            if($appareils)
            {
                $stock = Stocks::create( 
                    [ 
                        'appareil'=> $appareils->id,
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
                    ]);
                    
            }
            return redirect('/admin/stock/index');
         
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Stocks  $stocks
     * @return \Illuminate\Http\Response
     */
    public function show(Stocks $stocks)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Stocks  $stocks
     * @return \Illuminate\Http\Response
     */
    public function edit(Stocks $stocks)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Stocks  $stocks
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stocks $stocks)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Stocks  $stocks
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stocks $stocks)
    {
        //
    }
}
