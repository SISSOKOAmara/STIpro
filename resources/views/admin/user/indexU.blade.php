@extends('layouts.Master')

@section('content')

<div class="p-3 bg-body rounded shadow-sm d-block" >
          <div class="card-header text-center"><h2> Gestion des comptes d'utilisateur </h2></div>
          <br>
          <a href="{{ route('user.create') }}" class="Bplus btn btn-primary"style=""><i class="mdi mdi-plus-circle"style="width:50% ;"></i></a>
          <br>
          <br>
          
          <!-- debut tableau -->
          <div class="table-responsive">
                <table class="table text-center">
                  
                  <thead>
                    <tr">
                      <th scope="col"> </th>
                      <th scope="col">Nom</th>
                      <th scope="col">Prénom</th>
                      <th scope="col">Type de compte</th>
                      <th scope="col">E-mail</th>
                      <th scope="col">photo</th>
                      <th scope="col">Action</th>
                    </tr>
                    <tr>
                  </thead>
                  
                  <tbody><div class="container">
                  @foreach($user as $users)
                      <tr>
                          <td>{{$users->name}}</td>
                          <td>{{$users->prenom}}</td>
                          <td>{{$users->type}}</td>
                          <td>{{$users->email}}</td>
                          <!-- <td>{{$users->photo}}</td>                           -->
                          <td><img src="{{URL::to('users/profil/' .$users->photo)}}"  alt=""></td>                          
                          <!-- <td>{{$users->photo}}</td>-->
                          <td>
                            <a href="" class="btn btn-primary">Modifier</a>
                            <a href="" class="btn btn-danger">supprimer</a>
                          </td>
                      </tr>
                      @endforeach</div>
                  </tbody>
                  
                </table>
              </div>
          <!-- fin tableau -->
    </div>




@endsection