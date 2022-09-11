@extends('layouts.Master')

@section('content')

          
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <!-- <div class="card" style="background-image:url('/assetss/images/stiLogo.jpg');"> -->
            <div class="card">
                <div class="card-header text-black text-center">{{ __('Facture') }} <div class="text-right float"><button type="print" >P</button></div></div>
                <!-- head -->
                <div class="container">
<div class="row" style="border-bottom: 2px solid black ;">
    <div class="col-md-3">
        <img src="{{asset('assetss/images/stiLogo.jpg')}}" style="width:100%;" alt="">
    </div>
    <div class="col-md-8">
            <h1> <strong style="color:blue;"> Sage </strong>
                <strong style="color:#2ECD04;"> Tech </strong>
                <strong style="color:#FF6501;"> Informatique</strong>
            </h1>
        <h5>Maintenance – Vente – Site Web - logiciel</h5>
        <h5>Réseaux – Vidéo surveillance - Formation</h5>
        <h5>Tél. : 78 54 35 74 / 67 14 14 05</h5>
        <h6>Adresse : Marché Hamdallaye ACI 2000, près de l’hôtel Radisson, Bamako- Mali</h6>
        <h6>RC: MA.BKO.2019.A.1225</h6>
    </div>
</div>
<!-- head -->
<div class="row">
    <div class="col-md-12 text-center">
        <h3>Facture</h3>
    </div>
</div>
    <div class="row">
    <div class="col-md-12 text-right">
        <h6>Date: {{$Reparation->rdv}}</h6>
    </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-left">
            <h6>Client: {{$Reparation->client->nom}}</h6>
        </div>
        </div>


<div class="table-responsive table-bordered">
  <table class="table text-center ">
    <thead>
      <tr>
        <th scope="col">Qté</th>
        <th scope="col">désignation</th>
        <th scope="col">P.U</th>
        <th scope="col">Montant</th>
      </tr>
      <tr>
            
    </thead>
    <tbody>
      
        <tr>
        <!-- <tH colspan="4">Ds</th> -->
            <td>{{1}}</td>
            <td>{{$Reparation->marque}} - {{$Reparation->model}} - {{$Reparation->panne}}</td>
            <td>{{$Reparation->prix}}</td>
            <td>{{$Reparation->prix}}</td> 
            
            
           

        </tr>
     
        <!-- debut -->
        <tr>
        @foreach($Reparation->produits as $echange)

        <td>{{$echange->quantite}}</td>
            <td>{{$echange->categorie->nom}} {{$echange->marque}} {{$echange->model}}</td>
            <td>{{$echange->prix_vente}}</td>
            <td>{{$echange->somme}}</td> 
        </tr>
        @endforeach
        <!-- fin -->
    </tbody>
  </table>
</div>
                    <div class="row mb-5"></div>
                    <div class="row">
                            <div class="col-md-1">
                                <h6>Client</h6>
                            </div>

                            <div class="col-md-9"></div>

                            <div class="col-md-2 text-right">
                                <h6>Fournisseur</h6>
                            </div>
                    </div>
                
                </div>
            </div>
            </div>
        </div>
    </div>
</div>

@endsection