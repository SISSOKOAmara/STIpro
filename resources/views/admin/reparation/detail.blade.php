@extends('layouts.Master')

@section('content')

          
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="background-image:url('/assetss/images/stiLogo.jpg');">
                <div class="card-header text-black text-center">{{ __('Detail') }}</div>

                <div class="card-body text-black">
              <h6>Nom: <td>{{$Reparation->client->nom}}</td></h6>
              <h6>Numéro: <td>{{$Reparation->client->numero}}</td></h6>
               <h6>Catégorie: <td>{{$Reparation->categorie->nom}}</td></h6>
                <h6>Marque: <td>{{$Reparation->marque}}</td></h6>
                <h6>Panne:<td>{{$Reparation->panne}}</td></h6>
                <h6>Model:<td>{{$Reparation->model}}</td></h6>
               <h6> Note:<td>{{$Reparation->note}}</td></h6>
                <h6>Prix: <td>{{$Reparation->prix}}F</td></h6>
                <h6>paye: <td>{{$Reparation->paye}}F</td></h6>
                <h6>restant: <td>{{$Reparation->restant}}F</td></h6>
                <h6>RDV: <td>{{$Reparation->rdv}}</td></h6>
                <h6>Etat: <td>{{$Reparation->etat}}</td></h6>
                <h6>remarque: <td>{{$Reparation->remarque}}</td></h6>
                <h6>Enregistrement:<td>{{$Reparation->created_at}}</td></h6>
                <h6>Par:<td>{{$Reparation->user->name}}</td></h6>

                
                @foreach($Reparation->taches as $tache)
                <h6>operations:<td>{{$tache->designation}}</td></h6>
                @endforeach

                
                <h6>Piece change:
                   <td> @foreach($Reparation->produits as $echange)
                    {{$echange->marque}}
                @endforeach</td></h6>

                
                </div>
            </div>
        </div>
    </div>
</div>

@endsection