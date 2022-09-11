@extends('layouts.Master')

@section('content')

<h2 class="text-black text-center" >Liste des produits</h2>
<div class="p-3 bg-body rounded shadow-sm d-block" >

<a href="{{route('produit.ajout')}}" class="btn btn-primary mb-3"><i class="mdi mdi-plus-circle"style="width:20% ;"></i></a>

@if(session()->has("successDelete"))
         <div class="alert alert-success">
            {{session()->get('successDelete')}}
          </div>
     @endif

  <!-- <div class="table-responsive"> -->
  <table class="table table-bordered table-reponsive">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Fournisseur</th>
        <th scope="col">categorie </th>
        <th scope="col">Marque</th>
        <th scope="col">Model</th>
        <th scope="col">Etat</th>
        <th scope="col">Quantite</th>
        <th scope="col">Prix d'achat</th>
        <th scope="col">prix de vente</th>
        <th scope="col">Action</th>
      </tr>
      <tr>
            
    </thead>
    <tbody>
    @foreach($produit as $produits)
        <tr>
        
            <td scope="row">{{$loop->index + 1}}</td>
            <td>{{$produits->fournisseur->nom}}</td>
            <td>{{$produits->categorie->nom}}</td>
            <td>{{$produits->marque}}</td>
            <td>{{$produits->model}}</td>
            <td>{{$produits->etat}}</td>
            <td>{{$produits->quantite}}</td>
            <td>{{$produits->prix_achat}} F</td>
            <td>{{$produits->prix_vente}}</td>
            <td>
              <a href="{{route('achat.create', $produits->id)}}" ><i class="mdi mdi-border-color"></i></a>
              <!-- <a href="" class="btn btn-primary">Details</a> -->
              <a href="{{route('produit.show', $produits->id)}}" ><i class="mdi mdi-information-outline"></i></a>
              <a href="#"  onclick="if(confirm('Voulez vous vraiment supprimer cet appareil?')){document.getElementById('form-{{$produits->id}}').submit() }"><i class="mdi mdi-delete"></i></a>
                
                <form id="form-{{$produits->id}}" action="{{route('produit.supprimer',
        ['produits'=>$produits->id])}}" method="post">
      @csrf
      <input type="hidden" name="_method" value="delete">
      </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table> 
       
</div>


@endsection
