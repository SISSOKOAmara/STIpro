@extends('layouts.gerant')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-black text-center">{{ __('Detail') }}</div>

                <div class="card-body text-black">

                       <h3>Nom: {{$client->nom}}</h3> 
                       <h3>Numéro: {{$client->numero}}</h3>
                        
                        <h3>Adress: {{$client->adresse}}<h3>

                </div>
                <div class="card-footer text-black">
                
                    <div class="table-responsive">
                        <table id="datatablesSimple" class="table text-center font-size-13">
                            <thead>
                            <tr>
                                <th scope="col">Categorie</th>
                                <th scope="col">Marque</th>
                                <th scope="col">Model</th>
                                <th scope="col">Panne</th>
                                <th scope="col">Etat</th>
                                <th scope="col">Prix</th>
                                <th scope="col">Payé</th>
                                <th scope="col">Restant</th>
                                <th scope="col">Date</th>
                                <th scope="col">Rdv</th>
                                <th scope="col">Note</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                            @foreach($client->reparations as $appareils)
                                <tr>
                                    <td>{{$appareils->categorie->nom}}</td>
                                    <td>{{$appareils->marque}}</td>
                                    <td>{{$appareils->model}}</td>
                                    <td>{{$appareils->panne}}</td>
                                    <td>{{$appareils->etat}}</td>
                                    <td>{{$appareils->prix}}</td>
                                    <td>{{$appareils->paye}}</td>
                                    <td>{{$appareils->restant}}</td>
                                    <td>{{$appareils->created_at}}</td>
                                    <td>{{$appareils->rdv}}</td>
                                    <td>{{$appareils->note}}</td>
    
                                </tr>
                              @endforeach  
                            </tbody>
                        </table>
                     
                    </div>
    
                    </div>
            </div>
        </div>
    </div>
</div>

@endsection