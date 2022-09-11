@extends('layouts.Master')

@section('content')

<div class="card text-center">
       <div class="card-header bg-white"><h2> Gestion des comptes d'utilisateur </h2></div>
          <div class="card-body card-block">

  <!-- Ajout departement -->
  <div class="row text-center">
    <div class="col-md-11 ">
    <div class="card text-center">
       <div class="">Ajouter un compte</div>
          <div class="card-body card-block text-center">
              <form action="{{ route('user.store') }}" enctype="multipart/form-data" method="post" class="form-horizontal justify-content-center">
              @csrf
                <div class="row text-center">
                                <!-- debut scrip -->
                      @if(session()->has("success"))
                      <div class="alert alert-succes">
                          {{session()->get('success')}}
                        </div>
                          @endif

                          @if ($errors ->any())
                        <ul class="alert alert-danger">
                          @foreach ($errors->all() as $error)
                                    <li>{{$error }}</li>
                            @endforeach
                        </ul>
                        @endif
              <!-- fin script -->
                  <a href="{{ route('user.create') }}">Ajouter</a>
                    <div class="col col-sm-2">
                <!-- <label for="input-small" class=" form-control-label">Nom</label> -->
                        <input type="text" id="name" name="name" placeholder="Nom" class="input-sm form-control-sm form-control">
                      </div>                                      
                <div class="col col-sm-4">
                <!-- <label for="input-small" class=" form-control-label">Nom</label> -->
                        <input type="text" id="prenom" name="prenom" placeholder="prenom" class="input-sm form-control-sm form-control">
                        <!-- <input type="text" id="prenom" name="type" placeholder="type" class="input-sm form-control-sm form-control"> -->
                </div>
                                                                   
                <div class="col col-sm-2">                                                              
                    <select name="type">
                      <option  selected disabled>Type</option>
                      <option value="1">Admin</option>
                      <option value="2">Gérant</option>
                      <option value="0">technicien</option>
                  </select>
                </div> 
                <div class="col col-sm-2">
                      <!-- <label for="input-small" class=" form-control-label">Nom</label> -->
                        <input type="email" id="" name="email" placeholder="email" class="input-sm form-control-sm form-control">
                </div>

                   

                
                  </div>
                  <div class="row mt-2">

                 <div class="col col-sm-2">
                   <label for="input-small" class=" form-control-label">Photo</label> 
                  <input type="file" id="" name="photo" placeholder="" >
                </div> 
                    <div class="col col-sm-2">
                  <!-- <label for="input-small" class=" form-control-label">Nom</label> -->
                  <input type="password" id="" name="password" placeholder="Mot de passe" class="input-sm form-control-sm form-control">
                </div>
                <div class="col col-sm-2">
                  <!-- <label for="input-small" class=" form-control-label">Nom</label> -->
                  <input id="password-confirm" type="password" placeholder="comfirmer" class="input-sm form-control-sm form-control" name="password_confirmation" required autocomplete="new-password">
            
                </div>
                
                <div class="col col-sm-2">       
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Ajouter
                      </button>                                                        
                
                </div>
                  </div>

              </form>
       </div>
    </div>
</div>
  </div></div>
<div class="row"></div>
        <!-- fin ajout -->   
    
 <div class="row">
      <!-- debut tableau -->
          <div class="table-responsive">
            <table class="table text-center">
              <thead>
                <tr style="background-color:#1D71B8;">
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
              @foreach($user as $users)
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
                        <a href="" class="btn btn-danger">supprimerf</a>
                      </td>
                  </tr>
                  @endforeach
              </tbody>
            </table>
          </div>
      <!-- fin tableau -->
 </div>



@endsection