@extends('layouts.Master')

@section('content')
<div class="container mx-4" style="margin-left:10% ;">
<!-- boutton ajouter -->
<a href="{{ route('tache.ajout') }}" class="btn btn-primary">Ajouter</a>

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
        <th scope="col">Presonne</th>
        <th scope="col">Appareil</th>
        <th scope="col">Client</th>
        <th scope="col">Lieu</th>
        <th scope="col">designation</th>
        <th scope="col">Etat</th>
        <th scope="col">type</th>
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
            <td>{{$taches->user}}</td>
            <td>{{$taches->user}}</td>
            <td>{{$taches->reparation}}</td>
            <td>{{$taches->Lieu}}</td>
            <td>{{$taches->designation}}</td>
            <td>{{$taches->Etat}}</td>
            <td>{{$taches->type}}</td>
            
          <td>
            <a href="{{route('reparationajoutA', $taches->id)}}" class="btn btn-success">Ajouter appareil</a>
            <a href="" class="btn btn-primary">Modifier</a>
            <a href="{{route('client.detail',$taches->id)}}"  class="btn btn-warning">Detail</a>
          </td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>
<!-- fin tableau -->
</div>

@endsection