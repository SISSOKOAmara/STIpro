<?php

namespace App\Http\Controllers;

use App\Models\Appareils;
use App\Models\Categories;
use App\Models\Produit;
use App\Models\Reparations;
use Illuminate\Http\Request;

class AppareilsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $produit= Reparations::all() and Produit::all();
        //  $produit= Produit::all();
        //  $produit= Reparations::all();
         $categories=Categories::all();
        
        return view('/admin/appareil/Index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Appareils  $appareils
     * @return \Illuminate\Http\Response
     */
    public function show(Appareils $appareils)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Appareils  $appareils
     * @return \Illuminate\Http\Response
     */
    public function edit(Appareils $appareils)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Appareils  $appareils
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appareils $appareils)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Appareils  $appareils
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appareils $appareils)
    {
        //
    }
}
