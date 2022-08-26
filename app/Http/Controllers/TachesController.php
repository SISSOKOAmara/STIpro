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
        return view('tache/index', compact('tache'));
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

        $repara = Reparations::where('etat', 'Reparé')->get();

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
                'designation'=>['required', 'integer'],
                'designation'=>['required', 'string', 'max:30'],
                'designation'=>['required', 'string', 'max:30'],
                'Etat'=>['required', 'string', 'max:30'],
                'type'=>['required', 'string', 'max:30'],
                'user'=>['required', 'string', 'max:30'],
                'reparation'=>['required', 'string', 'max:30'],
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
     * @param  \App\Models\taches  $taches
     * @return \Illuminate\Http\Response
     */
    public function edit(taches $taches)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\taches  $taches
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, taches $taches)
    {
        //
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
