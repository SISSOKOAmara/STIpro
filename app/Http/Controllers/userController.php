<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        return view('admin/user/indexU', compact('user'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {       
        $user = User::all();
            return view('admin/user/create', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function profil()
    {       
        // $User = User::all();
        $user =Auth::User()->id;
    
        $User = User::where('id', $user)->get();
        // $User = User::all();
            return view('admin/user/profil', compact('User'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store2(Request $request)
    {
                    // var_dump('User')
        $verif = $request->validate(
                [
                    'name'=>['required', 'string', 'max:30'],
                    'prenom'=>['required', 'string', 'max:30'],
                    'photo' => 'required','string', 'mimes:jpeg,png,jpg,gif|max:1000',
                    'email'=>['required', 'string'],
                    'password'=>['required', 'string', 'max:30'],
                    'type'=>['required', 'string', 'max:30'],
                ]
            );
            if($verif)
            {
                $fileName = time().'.'.$request->photo->extension();  
                $request->photo->move(public_path('users/profil'), $fileName);
                
                $user = User::create(
                    [
                    'name'=>$request['name'],
                    'prenom'=>$request['prenom'],
                    'photo' => $fileName,
                    'email'=>$request['email'],
                    'password'=>bcrypt($request['password']),
                    'type'=>['type'],
                    ]
                );
            }
            return redirect('/comptes');
    }
// 

 /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index2()
    {
        $user = User::all();
        return view('admin/user/create', compact('user'));
    }
    public function store3(Request $request)
    {
        // var_dump('Clients')
        $User = $request->validate(
            [
                'name'=>['required', 'string', 'max:30'],
                'prenom'=>['required', 'string', 'max:30'],
                'photo' => 'required','string', 'mimes:jpeg,png,jpg,gif|max:1000',
                'email'=>['required', 'string'],
                'password'=>['required', 'string', 'max:30'],
                'type'=>['required', 'string', 'max:30'],
            ]
        );

        User::create($User);
            return redirect('/comptes');
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
          $user = User::findOrfail($id);
          return view('admin/user/show', compact('user'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $User
     * @return \Illuminate\Http\Response
     */
    public function edit(User $User)
    {
        //
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $User
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $User)
    {
        //
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $User
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $User)
    {
        //
    }
}