@extends('layouts.Slave')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-white text-center" style="background-color:#0201FD">{{ __('Detail') }}</div>

                <div class="card-body text-black">
                    
                    <h6 class="text-center">{{$Reparation->client->nom}}
                        &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
                          {{$Reparation->client->numero}}&nbsp; &nbsp; &nbsp; &nbsp;
                         <a href="{{route('client.detail2',$Reparation->client->id)}}" ><i class="mdi mdi-information-outline"></i></a>
                        </h6>
                    <hr>
                    <div class="row text-white" style="background-color: #0201FD">
                        <div class="col-md-12 text-center">     
                            {{$Reparation->categorie->nom}} - {{$Reparation->marque}}-{{$Reparation->model}}
                        </div>
                    </div>
                    <hr>
                <h6>Panne: {{$Reparation->panne}}
                    Piece change:
                         @foreach($Reparation->produits as $echange)
                         {{$echange->marque}}
                     @endforeach</h6>
                
                     
                <h6>Operations: </h6> 
                @foreach($Reparation->taches as $tache)
                <h6>.{{$tache->designation}}</h6>
                @endforeach
            
               <hr>
               <div class=" row text-white" style="background-color: #0201FD">
                        <div class="col-4 col-md-4">
                           <h6>Prix: {{$Reparation->prix}}F</h6>
                        </div>
                        <div class="col-4 col-md-4">
                            {{-- <span style="margin-left: 20%">Payé: {{$Reparation->paye}}F</span> --}}
                           <h6>Payé: {{$Reparation->paye}}F</h6> 
                        </div>
                        <div class="col-4 col-md-4">
                            {{-- <span style="float: right">Restant: {{$Reparation->prix - $Reparation->paye}}F</span></h6> --}}
                            <h6>Reste: {{$Reparation->prix - $Reparation->paye}}F</h6>

                        </div>
                    
                    
               {{-- </div> --}}
               </div>
               
                        <hr>
                        
                        <div class="row">
                            <div class="col-6 col-md-6"><h6>Enreg: {{$Reparation->created_at}}</h6></div>
                            <div class="col-6 col-md-6">
                                <h6>Par : {{$Reparation->user->name}} </h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 col-md-6"><h6>RDV: {{$Reparation->rdv}}</h6></div>
                            <div class="col-6 col-md-6"><h6>Recup: {{$Reparation->date_retrait}}</h6></div>
                        
                        </div>
                        <div class="row text-white justify-content-center pt-1" style="background-color: #0201FD">
                            <h6 class="text-center" style="">Etat: {{$Reparation->etat}}</h6>  
                        </div>

                        {{-- <h6>remarque: {{$Reparation->remarque}}</h6> --}}
                        <div class="row">
                            <div class="col-12 col-md-12"><h6>Note: {{$Reparation->note}}</h6></div>
                        </div>
                                             
                        

                </div>
            </div>
        </div>
    </div>
</div>       


@endsection