<?php

  

namespace App\Http\Controllers;

use App\Models\Reparations;
use Illuminate\Http\Request;

  

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

        return view('home');

    } 

  

    /**

     * Show the application dashboard.

     *

     * @return \Illuminate\Contracts\Support\Renderable

     */
    public function adminHome()
    {
        return view('admin.Home');


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

        return view('managerHome');

    }

}