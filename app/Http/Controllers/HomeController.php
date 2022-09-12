<?php

  

namespace App\Http\Controllers;

use App\Models\Clients;
use App\Models\fournisseurs;
use App\Models\Reparations;
use App\Models\taches;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller

{

    /**

     * Create a new controller instance.

     *

     * @return void

     */

    public function __construct()

    {

        $this->middleware('auth');

    }

  

    /**

     * Show the application dashboard.

     *

     * @return \Illuminate\Contracts\Support\Renderable

     */

    public function index()

    {
        $nbrreparation = Reparations::all()->count();
        $nbrattente = Reparations::where('etat', 'Attente')->count();
        $nbrEncours = Reparations::where('etat', 'En cours')->count();
        $nbrrepare = Reparations::where('etat', 'Réparé')->count();


        $user =Auth::User()->id;
         $taches = taches::where('user_id', $user)->count();

         $reparation = Reparations::where('user_id', $user)->count();

        $users = User::all()->count();
        $clients = Clients::all()->count();
        $fournisseurs = fournisseurs::all()->count();

        return view('home', compact('nbrreparation', 'nbrEncours', 'nbrattente' , 'nbrrepare', 'taches', 'users', 'clients', 'fournisseurs'));

    } 

  

    /**

     * Show the application dashboard.

     *

     * @return \Illuminate\Contracts\Support\Renderable

     */
    public function adminHome()
    {
        $nbrreparation = Reparations::all()->count();
        $nbrattente = Reparations::where('etat', 'Attente')->count();
        $nbrEncours = Reparations::where('etat', 'En cours')->count();
        $nbrrepare = Reparations::where('etat', 'Réparé')->count();

        $taches = taches::all()->count();
        $users = User::all()->count();
        $clients = Clients::all()->count();
        $fournisseurs = fournisseurs::all()->count();

        return view('admin.Home', compact('nbrreparation', 'nbrEncours', 'nbrattente' , 'nbrrepare', 'taches', 'users', 'clients', 'fournisseurs'));

         $reparations = Reparations::all();
            return view('admin.reparation/index', compact('reparations'));
    }

 public function repaireView()
    {
        return view('reparation.index');
    }
    
    /**

     * Show the application dashboard.

     *

     * @return \Illuminate\Contracts\Support\Renderable

     */

    public function managerHome()

    {

        $nbrreparation = Reparations::all()->count();
        $nbrattente = Reparations::where('etat', 'Attente')->count();
        $nbrEncours = Reparations::where('etat', 'En cours')->count();
        $nbrrepare = Reparations::where('etat', 'Réparé')->count();

        $taches = taches::all()->count();
        $users = User::all()->count();
        $clients = Clients::all()->count();
        $fournisseurs = fournisseurs::all()->count();

        return view('managerHome', compact('nbrreparation', 'nbrEncours', 'nbrattente' , 'nbrrepare', 'taches', 'users', 'clients', 'fournisseurs'));

    }

}