@extends('layouts.Master')

@section('content')
<h6 class="text-black text-center" >Liste des clients</h6>
<div class="p-3 bg-body rounded shadow-sm d-block" >
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
            <td>{{$client->nom}}</td>
            <td>{{$client->numero}}</td>
            <td>{{$client->adresse}}</td>
          <td>
            <a href="{{route('reparationajout1', $client->id)}}" class="btn btn-success">Ajouter appareil</a>
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