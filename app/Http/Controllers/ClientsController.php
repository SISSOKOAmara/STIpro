<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Clients::latest()->paginate(5);
        return view('admin/client/Index', compact('clients'))       
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function index3()
    {
        $clients = Clients::latest()->paginate(5);
        return view('gerant/client/Index', compact('clients'))       
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function index2()
    {
        $clients = Clients::latest()->paginate(5);
        return view('user/client/Index', compact('clients'))       
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    
    
  

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {       
        $clients = Clients::all();
            return view('admin/client/create', compact('clients'));
            return view('admin/client/createA', compact('clients'));
            
            // ->with('success','Product created successfully.');
    }
    public function create2()
    {       
        $clients = Clients::all();
            return view('user/client/create', compact('clients'));
            return view('user/client/createA', compact('clients'));
            
            // ->with('success','Product created successfully.');
    }
    public function create3()
    {       
        $clients = Clients::all();
            return view('gerant/client/create', compact('clients'));
            return view('gerant/client/createA', compact('clients'));
            
            // ->with('success','Product created successfully.');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
                    // var_dump('Clients')
        $clients = $request->validate(
                [
                    'nom'=>['required', 'string', 'max:30'],
                    'numero'=>['required', 'integer', 'unique:clients'],
                    'adresse'=>['required', 'string', 'max:30'],
                ]
            );

            clients::create($clients);
            return Redirect('/admin/clients');
    }
       /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store2(Request $request)
    {
                    // var_dump('Clients')
        $clients = $request->validate(
                [
                    'nom'=>['required', 'string', 'max:30'],
                    'numero'=>['required', 'integer', 'unique:clients'],
                    'adresse'=>['required', 'string', 'max:30'],
                ]
            );

            clients::create($clients);
            return Redirect('/technicien/clients');
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store3(Request $request)
    {
                    // var_dump('Clients')
        $clients = $request->validate(
                [
                    'nom'=>['required', 'string', 'max:30'],
                    'numero'=>['required', 'integer', 'unique:clients'],
                    'adresse'=>['required', 'string', 'max:30'],
                ]
            );

            clients::create($clients);
            return Redirect('/gerant/clients');
    }
    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
          //Afficher les details
          $client = Clients::findOrfail($id);
          return view('admin/client/show', compact('client'));
    }

     /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show3($id)
    {
        //
          //Afficher les details
          $client = Clients::findOrfail($id);
          return view('gerant/client/show', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Clients  $clients
     * @return \Illuminate\Http\Response
     */
    public function edit(Clients $clients)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Clients  $clients
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Clients $clients)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Clients  $clients
     * @return \Illuminate\Http\Response
     */
    public function destroy(Clients $clients)
    {
        //
    }
}
