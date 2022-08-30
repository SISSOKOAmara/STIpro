<?php

namespace App\Http\Controllers;

use App\Models\Reparations;
use App\Models\taches;
use App\Models\User;
use Illuminate\Http\Request;

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
        return view('tache/Index', compact('tache'));
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
        return view('admin/client/createA', compact('clients'));
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
                'designation'=>['required', 'string', 'max:30'],
                'Etat'=>['required', 'string', 'max:30'],
                'user_id'=>['required', 'string', 'max:30'],
                'reparation_id'=>['required', 'string', 'max:30'],
            ]
        );

         taches::create($tache);
        return redirect('tache/Index');
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
        $Reparé = Reparations::all();
        $modif = taches::findOrfail($id); 
        $repara = Reparations::where('etat', 'Attente')->get();      
        return view('tache/edit', compact('modif', 'repara', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update( $request,)
    {
                $modif =$request->validate([
               "designation"=>"Required",
                "Etat"=>"Required",
        ]);
        taches::whereId()->update($modif);
        return redirect('/tache/index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\taches  $taches
     * @return \Illuminate\Http\Response
     */
    public function destroy(taches $taches)
    {
        //
    }
}
