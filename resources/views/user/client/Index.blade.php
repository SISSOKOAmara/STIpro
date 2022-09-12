@extends('layouts.Slave')

@section('content')

<div class="p-3 bg-body rounded shadow-sm d-block" >
  <h6 class="text-black text-center" >Liste des clients</h6>
<!-- boutton ajouter -->
<a href="{{ route('clientajout2') }}" class="Bplus btn btn-primary "><i class="mdi mdi-plus-circle"style="width:50% ;"></i></a>

<!-- alert -->
    @if(session()->has("successDelete"))
         <div class="alert alert-success">
            {{session()->get('successDelete')}}
          </div>
     @endif
     
<!-- Success -->
     @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
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
            <a href="{{route('reparationajout2', $client->id)}}" class=""><i class="mdi mdi-plus-circle"style="width:50% ;"></i></a>
          </td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>
<!-- fin tableau -->
</div>

@endsection