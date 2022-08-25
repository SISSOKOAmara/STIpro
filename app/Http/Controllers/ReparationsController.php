<?php

namespace App\Http\Controllers;

use App\Models\Appareils;
use App\Models\Clients;
use App\Models\Reparations;
use Illuminate\Http\Request;

class ReparationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *@param  int $id
     * @return \Illuminate\Http\Response
     */
    
    public function listeA($id)
        {
            $client = Clients::findOrfail($id);
            $reparations = Reparations::all();
                  $clients = Clients::all();
            return view('admin/reparation/create', compact('clients'));
        }
public function liste()
        {
            $reparations = Reparations::all();
                  $clients = Clients::all();
            return view('admin/reparation/create', compact('clients'));
        }
    public function index()
        {        

                  $reparations = Reparations::all();
                  $clients = Clients::all();
                return view('admin/reparation/index', compact('reparations', 'clients'));
                
        }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
            $appar = $request->validate(
                [                    
                    'categorie'=>['required', 'string', 'max:30'],
                    'marque'=>['required', 'string', 'max:20'],
                    'model'=>['required', 'string', 'max:50'],
                    'motif'=>['required', 'string', 'max:50'],
                    'etat'=>['required', 'string', 'max:225'],
                    'note'=>['required', 'string', 'max:225'],        
                ]
            );
            if ($appar)
            {
                $appareils = Appareils::create(
                    [
                    'categorie'=>$request['categorie'],
                    'marque'=>$request['marque'],
                    'model'=>$request['model'],
                    'motif'=>'Réparation',
                    'etat'=>$request['etat'],
                    'note'=>$request['note'],
                    ]
                );
    
                if($appareils)
                {
                    $Reparations = Reparations::create( 
                        [ 
                            'appareil'=> $appareils->id,
                            'categorie'=>$request['categorie'],
                            'marque'=>$request['marque'],
                            'model'=>$request['model'],
                            'motif'=>'Réparation',
                            'etat'=>$request['etat'],
                            'note'=>$request['note'],
                            'panne'=>$request['panne'],
                            'prix'=>$request['prix'],
                            'paye'=>$request['paye'],
                            'rdv'=>$request['rdv'],
                            'date_retrait'=>$request['date_retrait'],
                            'remarque'=>$request['remarque'],
                            'client'=>$request['client'],
                             'commentaire'=>$request['commentaire'],
                        ]);
                        
                }
                return redirect('/admin/reparation/index');
             }
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
     * @param  \App\Models\Reparations  $reparations
     * @return \Illuminate\Http\Response
     */
    public function show(Reparations $reparations)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reparations  $reparations
     * @return \Illuminate\Http\Response
     */
    public function edit(Reparations $reparations)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reparations  $reparations
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reparations $reparations)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reparations  $reparations
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reparations $reparations)
    {
        //
    }
}