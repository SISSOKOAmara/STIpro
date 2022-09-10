<?php

namespace App\Http\Controllers;

use App\Models\fournisseurs;
use Illuminate\Http\Request;

class FournisseursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fournisseurs = fournisseurs::all();
        return view ('/admin/fourn/list', compact('fournisseurs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fournisseurs = fournisseurs::all();
        return view ('/admin/fourn/list', compact('fournisseurs'));
    }
       /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $fourn = $request->validate(
            [
                'nom'=>['required', 'string', 'max:30'],
                'numero'=>['required', 'integer','unique:fournisseurs'],
                'adresse'=>['required', 'string', 'max:30'],
            ]
        );
        
             fournisseurs::create($fourn);
        return back ()->with("succes", "Ajouté avec succès!");
        
        // return back()->with("success.alert", "Fournisseur ajouté avec succès!");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store2(Request $request)
    {
        
        $fourn = $request->validate(
            [
                'nom'=>['required', 'string', 'max:30'],
                'numero'=>['required', 'integer', 'max:17','unique:fournisseurs'],
                'adresse'=>['required', 'string', 'max:30'],
            ]
        );
        if($fourn)
        {
            $fourn= fournisseurs::create(
                [
                    'nom'=>$request['nom'],
                    'numero'=>$request['numero'],
                    'adresse'=>$request['adresse'],
                ]
            );
           
        }
        return view ('/admin/client/create', compact('fournisseurs'));
        
        // return back()->with("success.alert", "Fournisseur ajouté avec succès!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\fournisseurs  $fournisseurs
     * @return \Illuminate\Http\Response
     */
    public function show(fournisseurs $fournisseurs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\fournisseurs  $fournisseurs
     * @return \Illuminate\Http\Response
     */
    public function edit(fournisseurs $fournisseurs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\fournisseurs  $fournisseurs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, fournisseurs $fournisseurs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\fournisseurs  $fournisseurs
     * @return \Illuminate\Http\Response
     */
    public function destroy(fournisseurs $fournisseurs)
    {
        //
    }
}
