<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Clients;
use App\Models\Reparations;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReparationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *@param  int $id
     * @return \Illuminate\Http\Response
     */
    
    public function listeA()
        {       
            $reparations = Reparations::all();
                  $clients = Clients::all();
                  $categories = Categories::all();
            return view('admin/reparation/createA', compact('clients', 'categories'));
        }
        // form avec id client
    public function liste1($id)
        {
            
            $reparations = Reparations::all();
                  $clients = Clients::findOrfail($id);
                  $categories =Categories::all();
            return view('admin/reparation/create1', compact('clients','categories'));
        }
        // fin

    public function index()
        {        
                // $detail = Reparations::Whereid('$id');
                  $reparations = Reparations::all();
                  $clients = Clients::all();
                return view('admin/reparation/index', compact('reparations', 'clients'));
                
        }
        public function index2()
        {        
                // $detail = Reparations::Whereid('$id');
                  $reparations = Reparations::all();
                  $clients = Clients::all();
                return view('user/reparation/index', compact('reparations', 'clients'));
                
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
                            'categorie_id'=>$request['categorie_id'],
                            'marque'=>$request['marque'],
                            'model'=>$request['model'],
                            'etat'=>$request['etat'],
                            'motif'=>'Réparation',
                            'etat'=>'attente',
                            'note'=>$request['note'],
                            'panne'=>$request['panne'],
                            'prix'=>$request['prix'],
                            'paye'=>$request['paye'],
                            'rdv'=>$request['rdv'],
                            'date_retrait'=>$request['date_retrait'],
                            'remarque'=>$request['remarque'],
                            'client_id'=>$request['client_id'],
                        ]);
                        
                return redirect('/admin/reparation/index');
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
                    $Auth = Auth::user();
                    $user = User::all();
                    $clients = Clients::all();
                    $Reparations = Reparations::create( 
                        [                             
                            'user_id'=>$request['user_id'],
                            'categorie_id'=>$request['categorie_id'],
                            'marque'=>$request['marque'],
                            'model'=>$request['model'],
                            'etat'=>$request['etat'],
                            'motif'=>'Réparation',
                            'etat'=>$request['etat'],
                            'note'=>$request['note'],
                            'accessoire'=>$request['accessoire'],
                            'panne'=>$request['panne'],
                            'prix'=>$request['prix'],
                            'paye'=>$request['paye'],
                            'rdv'=>$request['rdv'],
                            'date_retrait'=>$request['date_retrait'],
                            'remarque'=>$request['remarque'],
                            'client_id'=>$request['client_id'],
                        ]);
                        
                return redirect('/admin.reparation.index');
     }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @param  \App\Models\Reparations  $reparations
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Afficher les details
           $Reparation = Reparations::findOrfail($id);
           
           return view('admin/reparation/detail', compact('Reparation'));
        //    fin
    }
     /**
     * Display the specified resource.
     *
     * @param  int $id
     * @param  \App\Models\Reparations  $reparations
     * @return \Illuminate\Http\Response
     */
    public function facture($id)
    {
        //Afficher les details
           $Reparation = Reparations::findOrfail($id);
           
           return view('admin/reparation/facture', compact('Reparation'));
        //    fin
    }

    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reparations  $reparations
     * @return \Illuminate\Http\Response
     */
    public function show2(Reparations $Reparations)
    {
           return view('admin/reparation/detail', compact('Reparations'));
        //    fin
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @param  \App\Models\Reparations  $reparations
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $repairedit = Reparations::findOrfail($id);
        $categories=Categories::all();
        return view('admin/reparation/edit', compact('repairedit', 'categories'));
        // fin
    }

    /**
     * Update the specified resource in storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
        $repairedit = $request->validate([
                 
                'categorie_id'=>['required', 'integer', 'max:20'],
                'etat'=>['required', 'string', 'max:225'],      
                'rdv'=>['required', 'date'],        
            ]);

            if($repairedit);
         { 
          $repairedit = Reparations::whereId($id)->update(
                [
            'categorie_id'=> $request['categorie_id'],
            'model'=> $request['model'],
            'panne'=>$request['panne'],
            'prix'=>$request['prix'],
            'paye'=>$request['paye'],
            'etat'=>$request['etat'],
            'remarque'=>$request['remarque'],
            'note'=>$request['note'],
            'rdv'=>$request['rdv'],
          ] );
        }
        $reparations=Reparations::all();
        $clients=Clients::all();
        return view('admin/reparation/index', compact('reparations', 'clients'));
        // Fin
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reparations  $reparations
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $delete = Reparations::findOrfail($id);
        $delete->delete();
        return redirect('/admin/reparation/index');
    }

  public function destroy2(Reparations $reparation)
    {
        //
        $reparation->delete();
        return back()->with("successDelete", "Appareil supprimé avec succès!");
    }
}