@extends('layouts.app')

@section('content')

<a href="{{route('stock.ajout')}}" class="btn btn-primary">Ajouter</a>
@if(session()->has("successDelete"))
         <div class="alert alert-success">
            {{session()->get('successDelete')}}
          </div>
     @endif



     <div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th scope="col"></th>
        <th scope="col">#</th>
        <th scope="col">Fournisseur</th>
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
    @foreach($stock as $stoks)
        <tr>
        <td>
              <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                  <label class="custom-control-label" for="customCheck1"></label>
              </div>
            </td>
        
            <td scope="row">{{$loop->index + 1}}</td>
            <td>{{$stoks->fournisseurs->nom}}</td>
            <td>{{$stoks->categorie}}</td>
            <td>{{$stoks->marque}}</td>
            <td>{{$stoks->model}}</td>
            <td>{{$stoks->motif}}</td>
            <td>{{$stoks->etat}}</td>
            <td>{{$stoks->note}}</td>
            <td>{{$stoks->prix}}F</td>
            <td>{{$stoks->etat}}</td>
            <td>
              <a href="" class="btn btn-primary">Modifier</a>
              <a href="" class="btn btn-info">Detail</a>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>


@endsection