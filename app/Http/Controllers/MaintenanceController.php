<?php

namespace App\Http\Controllers;

use App\Models\maintenance;
use App\Models\Reparations;
use Illuminate\Http\Request;

class MaintenanceController extends Controller
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
     
    public function create($id)
    {
        $appareil=Reparations::FindOrFail($id);

        return view('admin/panne/create', compact('appareil'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $panne = $request->validate(
            [
        
                'panne'=>['required', 'string', 'max:30'],
                'etat'=>['required', 'string', 'max:60'],
                'prix'=>['required', 'integer', 'max:2000000'],
                'paye'=>['required', 'integer', 'max:2000000'],
                'reparation_id'=>['required', 'integer'],
            ]
        );

         maintenance::create($panne);
        return redirect('/admin/reparation/reparations');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\maintenance  $maintenance
     * @return \Illuminate\Http\Response
     */
    public function show(maintenance $maintenance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\maintenance  $maintenance
     * @return \Illuminate\Http\Response
     */
    public function edit(maintenance $maintenance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\maintenance  $maintenance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, maintenance $maintenance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\maintenance  $maintenance
     * @return \Illuminate\Http\Response
     */
    public function destroy(maintenance $maintenance)
    {
        //
    }
}
