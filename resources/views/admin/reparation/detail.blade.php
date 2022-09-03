@extends('layouts.Master')

@section('content')

          
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="background-image:url('/assetss/images/stiLogo.jpg');">
                <div class="card-header text-black text-center">{{ __('Detail') }}</div>

                <div class="card-body text-black">
              <h6>Nom: <td>{{$details->client->nom}}</td></h6>
              <h6>Numéro: <td>{{$details->client->numero}}</td></h6>
               <h6>Catégorie: <td>{{$details->categorie}}</td></h6>
                <h6>Panne: <td>{{$details->marque}}</td></h6>
                <h6>Panne:<td>{{$details->panne}}</td></h6>
               <h6> Note:<td>{{$details->note}}</td></h6>
                <h6>Prix: <td>{{$details->prix}}</td></h6>
                <h6>RDV: <td>{{$details->rdv}}F</td></h6>
                <h6>Etat: <td>{{$details->etat}}</td></h6>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection