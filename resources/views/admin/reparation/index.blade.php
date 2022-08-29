@extends('layouts.Master')

@section('content')
<div class="container">
    <a href="{{ route('reparationajoutA') }}" class="btn btn-primary">Ajouter</a>
    <div class="table-responsive">
      <table class="table">
        <thead>
          <tr>
            <th scope="col"></th>
            <th scope="col">Client</th>
            <th scope="col">categorie </th>
            <th scope="col">Marque</th>
            <th scope="col">Model</th>
            <th scope="col">Motif</th>
            <th scope="col">Panne</th>
            <th scope="col">Note</th>
            <th scope="col">Prix</th>
            <th scope="col">Etat</th>
            <th scope="col">Action</th>
          </tr>
          <tr>
                
        </thead>
        <tbody>
        @foreach($reparations as $reparation)
            <tr>
            <td>
                  <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                      <label class="custom-control-label" for="customCheck1"></label>
                  </div>
                </td>
            
                <td>{{$reparation->client->nom}}</td>
                <td>{{$reparation->categorie}}</td>
                <td>{{$reparation->marque}}</td>
                <td>{{$reparation->model}}</td>
                <td>{{$reparation->motif}}</td>
                <td>{{$reparation->panne}}</td>
                <td>{{$reparation->note}}</td>
                <td>{{$reparation->prix}}F</td>
                <td>{{$reparation->etat}}</td>
                <td>
                  <a href="" class="btn btn-primary">Modifier</a>
                  <a href="" class="btn btn-info">Detail</a>
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>
    </div>
</div>

@endsection