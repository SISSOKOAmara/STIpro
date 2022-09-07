<?php

namespace App\Http\Controllers;

use App\Models\Achat;
use App\Models\Produit;
use Illuminate\Http\Request;
use PhpParser\Builder\Function_;

class AchatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create( $id)
    {
        $produit = Produit::findOrfail($id);
        return view('admin.achat.create', compact('produit'));
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $amara= $request->validate(
           [
            'quantite'=>['required', 'integer'],
            'nom'=>['required', 'string'],
            'prenom'=>['required', 'string'],
           ]
           
        );
        if($amara)
        {
            $achat=Achat::create(
                [
                    'quantite'=>$request['quantite'],
                    'produit_id'=>$request['produit_id'],
                    'nom'=>$request['nom'],
                    'prenom'=>$request['prenom'],
                ]
                );

                $product = Produit::find($id);

                $stock = Achat::where('produit_id', $product->id);
                $stock->decrement('quantite', 3);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Achat  $achat
     * @return \Illuminate\Http\Response
     */
    public function show(Achat $achat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Achat  $achat
     * @return \Illuminate\Http\Response
     */
    public function edit(Achat $achat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Achat  $achat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Achat $achat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Achat  $achat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Achat $achat)
    {
        //
    }

    public function decrement(Achat $achat)
    {
        $produit = $achat->produit_id;

        $produit->decrement('quantite', 3);

        $this->mount();
    }
}
