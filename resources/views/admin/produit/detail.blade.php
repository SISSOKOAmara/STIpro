@extends('layouts.Master')

@section('content')
<div class="p-3 bg-body rounded shadow-sm d-block text-black"  >

<h6>Categorie: {{$produit->categorie->nom}}</h6>
{{$produit->model}}
{{$produit->quantite}}
</div>


@endsection