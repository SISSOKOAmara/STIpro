@extends('layouts.gerant')

@section('content')
<div class="container-fluid">
    {{-- <div class="row justify-content-center"> --}}
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-white text-center" style="background-color: #0201FD">{{ __('Listes des apparels du client') }}</div>

                <div class="card-body text-black">
                    <div class="row">
                        <div class="col-10 col-md-10">
                            <h6>Nom: {{$client->nom}}</h6> 
                            <h6>Numéro: {{$client->numero}}</h6>
                            <h6>Adress: {{$client->adresse}}<h6>
                        </div>
                        <div class="col-2 col-md-2">
                            <a href="{{route('reparationajout3', $client->id)}}" class=""><i class="mdi mdi-plus-circle"style="width:80% ;"></i></a>
                        </div>


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
                                <th scope="col">Etat</th>
                                <th scope="col">Date</th>
                                <th scope="col">Rdv</th>
                                <th scope="col">Note</th>
                                <th scope="col">Action</th>
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
                                    <td>{{$appareils->etat}}</td>
                                    <td>{{$appareils->created_at}}</td>
                                    <td>{{$appareils->rdv}}</td>
                                    <td>{{$appareils->note}}</td>

                                    <td>
                                        <a href="{{route('reparation.edit3',$appareils->id)}}"  class="mdi mdi-border-color" id="Bplus"></a>
                                        <a href="{{route('reparation.detail3',$appareils->id)}}"  class=""><i class="mdi mdi-information-outline"></i></a>
                                        <a href="{{route('reparation.facture3',$appareils->id)}}"><i class="mdi mdi-file-document-box"></i></a>
                                    </td>
    
                                </tr>
                              @endforeach  
                            </tbody>
                        </table>
                     
                    </div>
    
                    </div>
            </div>
        </div>
    {{-- </div> --}}
</div>

@endsection