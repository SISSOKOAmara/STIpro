@extends('layouts.Master')

@section('content')
        <div class="p-3 bg-body rounded shadow-sm d-block text-black"  >
            <h2>Details du produit</h2>
                    <h6>Categorie: {{$produit->categorie->nom}}</h6>
                    <h6> Marque: {{$produit->marque}}</h6>
                    <h6> Model: {{$produit->model}}</h6>
                    <h6> Etat: {{$produit->etat}}</h6> 
                    <h6> Quanitire: {{$produit->quantite}}</h6>
                    <h6> Prix d'achat:{{$produit->prix_achat}}</h6>
                    <h6>somme: {{$produit->quantite * $produit->prix_achat}}</h6> 
                    <h6>Prix de vente: {{$produit->prix_vente}}</h6>  
                    <h6>Benefice: {{$produit->prix_vente - $produit->prix_achat}}</h6> 
                    <!-- <h6>{{$produit->date_achat}}</h6>   -->
                    
                    <h6>Note: {{$produit->note}}</h6>
                    <h6>Fournisseur: {{$produit->fournisseur->nom}}</h6>
                    <h6>Enreigisteur:{{$produit->user->name}}</h6>
        </div>


@endsection