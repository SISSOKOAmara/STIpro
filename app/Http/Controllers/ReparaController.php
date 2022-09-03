<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use App\Models\Reparations;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReparaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    return redirect('/admin/reparation/index2');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        
        $Auth = Auth::user();
        $user = User::all();
        $clients = Clients::all();
        $Reparations = Reparations::create( 
            [                             
                'user_id'=>$request['user_id'],
                'categorie'=>$request['categorie'],
                'marque'=>$request['marque'],
                'model'=>$request['model'],
                'etat'=>$request['etat'],
                'motif'=>'Réparation',
                'etat'=>$request['etat'],
                'note'=>$request['note'],
                'panne'=>$request['panne'],
                'prix'=>$request['prix'],
                'paye'=>$request['paye'],
                'rdv'=>$request['rdv'],
                'date_retrait'=>$request['date_retrait'],
                'remarque'=>$request['remarque'],
                'client_id'=>$request['client_id'],
            ]);
            
    return redirect('/admin/reparation/index2');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    
}
