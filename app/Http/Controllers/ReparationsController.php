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
        // 23.12.23
    public function form2($id)
        {
            
                $reparations = Reparations::all();
                $clients = Clients::findOrfail($id);
                $categories =Categories::all();
            return view('user/reparation/create1', compact('clients','categories'));
        }

    public function form3($id)
        {
            
                $reparations = Reparations::all();
                $clients = Clients::findOrfail($id);
                $categories =Categories::all();
            return view('gerant/reparation/create1', compact('clients','categories'));
        }

    public function liste3($id)
        {
            
            $reparations = Reparations::all();
                  $clients = Clients::findOrfail($id);
                  $categories =Categories::all();
            return view('gerant/reparation/create1', compact('clients','categories'));
        }
    public function liste2($id)
        {
            
            $reparations = Reparations::all();
                  $clients = Clients::findOrfail($id);
                  $categories =Categories::all();
            return view('user/reparation/create1', compact('clients','categories'));
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
                  $reparations = Reparations::all();
                  $clients = Clients::all();
                return view('user/reparation/index2', compact('reparations', 'clients'));
                
        } 

        public function index3()
        {        
                // $detail = Reparations::Whereid('$id');
                  $reparations = Reparations::all();
                  $clients = Clients::all();
                return view('gerant/reparation/index', compact('reparations', 'clients'));
                
        }

         public function attente()
        {        
                // $detail = Reparations::Whereid('$id');
      
        $reparations = Reparations::where('etat', 'Attente')->get();

                  $clients = Clients::all();
                return view('admin/reparation/index', compact('reparations', 'clients'));
                
        }
        public function attente2()
        {        
            $reparations = Reparations::where('etat', 'Attente')->get();

                  $clients = Clients::all();
                return view('user/reparation/index2', compact('reparations', 'clients'));
                
        }
        public function attente3()
        {        
      
        $reparations = Reparations::where('etat', 'Attente')->get();

                  $clients = Clients::all();
                return view('gerant/reparation/index', compact('reparations', 'clients'));
                
        }
        
        public function Encours()
        {        
                // $detail = Reparations::Whereid('$id');
      
        $reparations = Reparations::where('etat', 'En cours')->get();

                  $clients = Clients::all();
                return view('admin/reparation/index', compact('reparations', 'clients'));
                
        }
        public function Encours2()
        {        
                // $detail = Reparations::Whereid('$id');
      
        $reparations = Reparations::where('etat', 'En cours')->get();

                  $clients = Clients::all();
                return view('user/reparation/index2', compact('reparations', 'clients'));
                
        }
        public function Encours3()
        {        
                // $detail = Reparations::Whereid('$id');
      
        $reparations = Reparations::where('etat', 'En cours')->get();

                  $clients = Clients::all();
                return view('gerant/reparation/index', compact('reparations', 'clients'));
                
        }
        public function reparfinish()
        {        
      
        $reparations = Reparations::where('etat', 'Réparé')->get();

                  $clients = Clients::all();
                return view('admin/reparation/index', compact('reparations', 'clients'));
                
        }
        public function reparfinish2()
        {        
      
        $reparations = Reparations::where('etat', 'Réparé')->get();

                  $clients = Clients::all();
                return view('user/reparation/index2', compact('reparations', 'clients'));
                
        }
        public function reparfinish3()
        {        
      
        $reparations = Reparations::where('etat', 'Réparé')->get();

                  $clients = Clients::all();
                return view('gerant/reparation/index', compact('reparations', 'clients'));
                
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
                 return redirect('/admin/reparation/reparations')->with("success", "Appareil ajouté avec succès!");
                        
             }
     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create2(Request $request)
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
                            'rdv'=>$request['rdv'],
                            'restant'=>$request['prix'-'paye'],
                            'date_retrait'=>$request['date_retrait'],
                            'remarque'=>$request['remarque'],
                            'client_id'=>$request['client_id'],
                        ]);
                        
                return redirect('/user/reparation/index2')->with("success", "Appareil ajouté avec succès!");
                
                return redirect('/user/reparation/index2');
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
                            'etat'=>'attente',
                            'motif'=>'Réparation',
                            'etat'=>$request['etat'],
                            'note'=>$request['note'],
                            // 'accessoire'=>$request['accessoire'],
                            'panne'=>$request['panne'],
                            'remarque'=>$request['remarque'],
                            'client_id'=>$request['client_id'],
                        ]);
                        
                return redirect('admin/reparation/reparations');
     }
      /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store2(Request $request)
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
                            // 'accessoire'=>$request['accessoire'],
                            'panne'=>$request['panne'],
                            'date_retrait'=>$request['date_retrait'],
                            'remarque'=>$request['remarque'],
                            'client_id'=>$request['client_id'],
                        ]);
                        
                return redirect('technicien/reparations');
     }

         

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store3(Request $request)
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
                            'etat'=>'attente',
                            'motif'=>'Réparation',
                            'etat'=>$request['etat'],
                            'note'=>$request['note'],
                            // 'accessoire'=>$request['accessoire'],
                            'panne'=>$request['panne'],
                            'remarque'=>$request['remarque'],
                            'client_id'=>$request['client_id'],
                        ]);
                        
                return redirect('gerant/reparation/reparations');
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
    public function show3($id)
    {
        //Afficher les details
           $Reparation = Reparations::findOrfail($id);
           
           return view('gerant/reparation/detail', compact('Reparation'));
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
     * @param  int $id
     * @param  \App\Models\Reparations  $reparations
     * @return \Illuminate\Http\Response
     */
    public function facture3($id)
    {
        //Afficher les details
           $Reparation = Reparations::findOrfail($id);
           
           return view('gerant/reparation/facture', compact('Reparation'));
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
           return view('user/reparation/detail', compact('Reparations'));
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
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @param  \App\Models\Reparations  $reparations
     * @return \Illuminate\Http\Response
     */
    public function edit2($id)
    {
        
        $repairedit = Reparations::findOrfail($id);
        $categories=Categories::all();
        return view('user/reparation/edit', compact('repairedit', 'categories'));
        // fin
    }

    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @param  \App\Models\Reparations  $reparations
     * @return \Illuminate\Http\Response
     */
    public function edit3($id)
    {
        
        $repairedit = Reparations::findOrfail($id);
        $categories=Categories::all();
        return view('gerant/reparation/edit', compact('repairedit', 'categories'));
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
     * Update the specified resource in storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update2(Request $request, $id)
    {
       
        $repairedit = $request->validate([
                 
                'categorie_id'=>['required', 'integer', 'max:20'],
                'etat'=>['required', 'string', 'max:225'],
            ]);

            if($repairedit);
         { 
          $repairedit = Reparations::whereId($id)->update(
                [
            'panne'=>$request['panne'],
            'etat'=>$request['etat'],
            'remarque'=>$request['remarque'],
            'note'=>$request['note'],
          ] );
        }
        $reparations=Reparations::all();
        $clients=Clients::all();
        return view('user/reparation/index2', compact('reparations', 'clients'));
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