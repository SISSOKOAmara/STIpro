@extends('layouts.Master')

@section('content')

<a href="{{route('produit.ajout')}}" class="btn btn-primary">Ajouter</a>
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
        <th scope="col">Etat</th>
        <th scope="col">Quantite</th>
        <th scope="col">Prix d'achat</th>
        <th scope="col">Restant</th>
        <th scope="col">Vendu</th>
        <th scope="col">Action</th>
      </tr>
      <tr>
            
    </thead>
    <tbody>
    @foreach($produit as $produits)
        <tr>
        <td>
              <!-- <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                  <label class="custom-control-label" for="customCheck1"></label>
              </div> -->
            </td>
        
            <td scope="row">{{$loop->index + 1}}</td>
            <td>{{$produits->fournisseur->nom}}</td>
            <td>{{$produits->categorie->nom}}</td>
            <td>{{$produits->marque}}</td>
            <td>{{$produits->model}}</td>
            <td>{{$produits->etat}}</td>
            <td>{{$produits->quantite}}</td>
            <td>{{$produits->prix_achat}} F</td>
            <td>{{$produits->QtRestant}}</td>
            <td>{{$produits->QtVendu}}</td>
            <td>
              <a href="{{route('achat.create', $produits->id)}}" class="btn btn-primary">Acheter</a>
              <!-- <a href="" class="btn btn-primary">Details</a> -->
              <a href="{{route('produit.show', $produits->id)}}" class="btn btn-info">Detail</a>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table> 
       
</div>


@endsection