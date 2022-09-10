@extends('layouts.Master')

@section('content')

<div class="card text-center">
       <div class="card-header bg-white"><h2>Votre compte</h2></div>
          <!-- <div class="card-body card-block"> -->

  <!-- Ajout departement -->
  
<!-- <div class="row"></div> -->
        <!-- fin ajout -->   
    
 <div class="row">
      <!-- debut tableau -->
          <div class="table-responsive">
            <table class="table text-center">
              <thead>
                <tr class="bg-primary">
                  <th scope="col"> </th>
                  <th scope="col">Nom</th>
                  <th scope="col">Prénom</th>
                  <th scope="col">Type de compte</th>
                  <th scope="col">E-mail</th>
                  <th scope="col">photo</th>
                  <th scope="col">Action</th>
                </tr>
                <tr>
                      <!-- <td>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                            <label class="custom-control-label" for="customCheck1">1</label>
                        </div>
                      </td> -->
              </thead>
              <tbody>
              @foreach($User as $users)
                  <tr>
                  <td>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                            <label class="custom-control-label" for="customCheck1"></label>
                        </div>
                      </td>
                      <td>{{$users->name}}</td>
                      <td>{{$users->prenom}}</td>
                      <td>{{$users->type}}</td>
                      <td>{{$users->email}}</td>
                      <td>{{$users->photo}}</td>                          
                      <td>
                        <a href="" class="btn btn-primary">Modifier</a>
                        <a href="" class="btn btn-danger">supprimer</a>
                      </td>
                  </tr>
                  @endforeach
              </tbody>
            </table>
          </div>
      <!-- fin tableau -->
 </div>
       </div>



@endsection