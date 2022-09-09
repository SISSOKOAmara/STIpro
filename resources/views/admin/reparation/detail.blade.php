@extends('layouts.Master')

@section('content')

          
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="background-image:url('/assetss/images/stiLogo.jpg');">
                <div class="card-header text-black text-center">{{ __('Detail') }}</div>

                <div class="card-body text-black">
              <h6>Nom: <td>{{$Reparations->client->nom}}</td></h6>
              <h6>Numéro: <td>{{$Reparations->client->numero}}</td></h6>
               <h6>Catégorie: <td>{{$Reparations->categorie->nom}}</td></h6>
                <h6>Marque: <td>{{$Reparations->marque}}</td></h6>
                <h6>Panne:<td>{{$Reparations->panne}}</td></h6>
                <h6>Model:<td>{{$Reparations->model}}</td></h6>
               <h6> Note:<td>{{$Reparations->note}}</td></h6>
                <h6>Prix: <td>{{$Reparations->prix}}F</td></h6>
                <h6>paye: <td>{{$Reparations->paye}}F</td></h6>
                <h6>restant: <td>{{$Reparations->restant}}F</td></h6>
                <h6>RDV: <td>{{$Reparations->rdv}}</td></h6>
                <h6>Etat: <td>{{$Reparations->etat}}</td></h6>
                <h6>remarque: <td>{{$Reparations->remarque}}</td></h6>
                <h6>Enregistrement:<td>{{$Reparations->created_at}}</td></h6>
                <h6>Par:<td>{{$Reparations->user->name}}</td></h6>
                <h6>Par:<td>{{$Reparations->taches->designation}}</td></h6>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection