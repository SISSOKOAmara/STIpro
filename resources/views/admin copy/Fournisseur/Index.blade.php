@extends('layouts.Master')

@section('content')
<div class="container" style="margin-left:10% ;">
<!-- boutton ajouter -->
<a href="{{ route('clientajout') }}" class="btn btn-primary">Ajouter</a>

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
        <th scope="col">Nom</th>
        <th scope="col">Numéro</th>
        <th scope="col">Adresse</th>
        <th scope="col">Action</th>
      </tr>
      <tr>
            
    </thead>
    <tbody>
    @foreach($clients as $client)
        <tr>
        <td>
              <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                  <label class="custom-control-label" for="customCheck1"></label>
              </div>
        </td>
            <td>{{$client->nom}}</td>
            <td>{{$client->numero}}</td>
            <td>{{$client->adresse}}</td>
          <td>
            <a href="{{route('reparationajoutA', $client->id)}}" class="btn btn-success">Ajouter appareil</a>
            <a href="" class="btn btn-primary">Modifier</a>
            <a href="{{route('client.detail',$client->id)}}"  class="btn btn-warning">Detail</a>
          </td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>
<!-- fin tableau -->
</div>

@endsection