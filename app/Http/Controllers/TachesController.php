<?php

namespace App\Http\Controllers;

use App\Models\Reparations;
use App\Models\taches;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TachesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tache =taches::all();
        return view('tache/index', compact('tache'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index2()
    {
       
    $user =Auth::User()->id;
    
    $tache = taches::where('user_id', $user)->get();
        // $tache =taches::all();
        return view('user/tache/tache2', compact('tache'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {       
        // $secretaires = secretaires::Where('user', $user->id)->first();
        $user = User::all();
        $Reparé = Reparations::all();

        // $dejaenreparation = Reparations::
        // whereRaw('Reparations.id = (select max(id) from `Reparations` id where etat = '.$Reparé.')' )
        // ->orderBy('id', 'desc')
        // ->get();

        $repara = Reparations::where('etat', 'Attente')->get();

        return view('tache/create', compact('user',  'repara'));
    }

    public function create2()
    {       
        $user = User::all();
        $Reparé = Reparations::all();
        $repara = Reparations::where('etat', 'Attente')->get();

        return view('user/tache/create', compact('user',  'repara'));
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
        $tache = $request->validate(
            [
                'Lieu'=>['required', 'string', 'max:30'],
                'designation'=>['required', 'string', 'max:60'],
                'Etat'=>['required', 'string', 'max:30'],
                'user_id'=>['required', 'string', 'max:30'],
                'reparation_id'=>['required', 'string', 'max:30'],
                'delai'=>['required', 'date', 'max:30'],
            ]
        );

         taches::create($tache);
        return redirect('/admin/tache');
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
        $tache = $request->validate(
            [
                'Lieu'=>['required', 'string', 'max:30'],
                'designation'=>['required', 'string', 'max:30'],
                'Etat'=>['required', 'string', 'max:30'],
                'user_id'=>['required', 'string', 'max:30'],
                'reparation_id'=>['required', 'string', 'max:30'],
                'delai'=>['required', 'date', 'max:30'],
            ]
        );

         taches::create($tache);
        return redirect('/technicien/liste/tache');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\taches  $taches
     * @return \Illuminate\Http\Response
     */
    public function show(taches $taches)
    {
        //
    }

         /**
     * Show the form for editing the specified resource.
     *
     * * @param  \Illuminate\Http\Request  $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::all();
        $modif = taches::findOrfail($id); 
        $repara = Reparations::where('etat', 'Attente')->get();      
        return view('tache/edit', compact('modif', 'repara', 'user'));
    }

        
         /**
     * Show the form for editing the specified resource.
     *
     * * @param  \Illuminate\Http\Request  $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit2($id)
    {
        $user = User::all();
        $modif = taches::findOrfail($id); 
        $repara = Reparations::where('etat', 'Attente')->get();      
        return view('user/tache/edit', compact('modif', 'repara', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update( Request $request, $id)
    {
                $modif =$request->validate([
                'etat'=>['required', 'string', 'max:20'],
                'designation'=>['required', 'string', 'max:225'],
        ]);
        if($modif)
        $modif = taches::whereId($id)->update(
        [
            'designation'=> $request['designation'],
            'etat'=>$request['etat'],
            
          ] );
        
        return redirect('/admin/tache');
    }
     /**
     * Update the specified resource in storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update2( Request $request, $id)
    {
                $modif =$request->validate([
                'etat'=>['required', 'string', 'max:20'],
                'designation'=>['required', 'string', 'max:225'],
        ]);
        if($modif)
        $modif = taches::whereId($id)->update(
        [
            'designation'=> $request['designation'],
            'etat'=>$request['etat'],
            
          ] );
        
        return redirect('/technicien/liste/tache');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\taches  $taches
     * @return \Illuminate\Http\Response
     */
    public function destroy(taches $taches)
    {
        $taches->delete();
        return back()->with("successDelete", "taches supprimé avec succès!");

    }
}
