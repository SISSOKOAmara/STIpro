@extends('layouts.Master')

@section('content')
<div class="container mx-4" style="margin-left:10% ;">
<!-- boutton ajouter -->
<a href="{{ route('tache.ajout') }}" class="btn btn-primary">Ajouter</a>

{{-- Nav brand --}}
<hr>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a href="{{route('tache.list.all')}}" class="navbar-brand btn btn-primary">Tout</a>
  <a href="{{route('tache.list')}}" class="navbar-brand btn btn-info">Actuel</a>
  <a href="{{route('tache.listPreview')}}" class="navbar-brand btn btn-success">Précédent</a>
  {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div> --}}
</nav>
<hr>
{{-- Nav brand --}}

<!-- alert -->
@if(session()->has("successDelete"))
          <div class="alert alert-success">
            {{session()->get('successDelete')}}
          </div>
     @endif
     <!-- fin alert -->

     <!-- debut tableau -->
<div class="table-responsive">
  <table class="table text-center ">
    <thead>
    

      <tr>
        <th scope="col"><input type="checkbox" id="fieldsForm_checkall" class="checkall_box" title="Tout cocher"></th>
        <th scope="col"><i class="mdi mdi-account"></i> </th>
        <th scope="col">Appareil</th>
        <th scope="col">Client</th>
        <th scope="col">Lieu</th>
        <th scope="col">designation</th>
        <th scope="col">Etat</th>
        <th scope="col">Delai</th>
        <th scope="col">Action</th>
      </tr>
      <tr>
            
    </thead>
    <tbody>
    @foreach($tache as $taches)
        <tr>
        <td>
              <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                  <label class="custom-control-label" for="customCheck1"></label>
              </div>
        </td>
            <td>{{$taches->user->name}}</td>
            <td>{{$taches->reparation->marque}}  {{$taches->reparation->model}}</td>
            <td>{{$taches->reparation->client->nom}}</td>
            <td>{{$taches->Lieu}}</td>
            <td>{{$taches->designation}}</td>
            <td>{{$taches->Etat}}</td>
            <td>{{$taches->delai}}</td>
            
          <td>
            <a href="{{route('tache.edit', $taches->id)}}"><i class="mdi mdi-border-color"></i></a>
            <!-- <a href="" class="btn btn-primary">Modifier</a> -->
            <a href="#"  onclick="if(confirm('Voulez vous vraiment supprimer cette tache?')){document.getElementById('form-{{$taches->id}}').submit() }"><i class="mdi mdi-delete"></i></a>
                
                <form id="form-{{$taches->id}}" action="{{route('tache.supprimer',
        ['taches'=>$taches->id])}}" method="post">
      @csrf
      <input type="hidden" name="_method" value="delete">
      </form>
          </td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>
<!-- fin tableau -->
</div>

@endsection