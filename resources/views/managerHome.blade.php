@extends('layouts.gerant')


@section('content')

<div class="container">
    <div class="row">
            <!-- reration -->
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header text-white text-center" style="background-color: blue;">{{ __('Réparations') }}</div>
                                                                
                            <!-- <h1><a href="{{ route('reparationIndex') }}" style="font-size:380% ; float:left; margin-top:-35% ;">{{$nbrreparation}}</a></h1>  -->
                            <div class="row">
                                    <div class="col-md-4 text-right">
                                        <h1><a href="{{ route('reparationIndex') }}" style="font-size:180% ;">{{$nbrreparation}}</a></h1> 

                                    </div>
                                    
                                    <div class="col-md-8">
                                        <br>
                                        <h6>Appareils <br>Enreigistrés</h6>
                                    </div>
                            
                        </div>
                
                    <!-- Fin link -->
                </div>
            </div>
            <!-- repare 2 -->
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header text-white text-center" style="background-color: blue;">{{ __('Réparé') }}</div>
                    <div class="row">
                                    <div class="col-md-4 text-right">
                                        <h1><a href="{{ route('reparationRepare') }}" style="font-size:180% ;">{{$nbrrepare}}</a></h1> 

                                    </div>
                                    
                                    <div class="col-md-8">
                                        <br>
                                        <h6>Appareils<br>réparés</h6>
                                    </div>
                            </div>
                </div>
            </div>
                <!-- Attente -->
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header text-white text-center" style="background-color: blue;">{{ __('Attente') }}</div>
                            <div class="row">
                                        <div class="col-md-4 text-right">
                                            <h1><a href="{{ route('reparationattente') }}" style="font-size:180% ;">{{$nbrattente}}</a></h1> 
                                        </div>
                                        <div class="col-md-8">
                                            <br>
                                            <h6>Appareil<br>en attente</h6>
                                        </div>
                            </div>
                    </div>
                </div>
                <!-- encours -->
                <div class="col-md-3">
                            <div class="card">
                                <div class="card-header text-white text-center" style="background-color: blue;">{{ __('Encours') }}</div>
                                    <div class="row">
                                                <div class="col-md-4 text-right">
                                                    <h1><a href="{{ route('reparationEncours') }}" style="font-size:180% ;">{{$nbrEncours}}</a></h1> 
                                                </div>
                                                <div class="col-md-8">
                                                    <br>
                                                    <h6>En cours de <br>reparation</h6>
                                                </div>
                                        
                            </div>
                        </div>
                </div>

       
    </div>
<div class="row mt-5"></div>
    <!-- 2eme ROW -->
    <div class="row">
            <!-- reration -->
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header text-white text-center" style="background-color: blue;">{{ __('Taches') }}</div>
                                                                
                            <!-- <h1><a href="{{ route('reparationIndex') }}" style="font-size:380% ; float:left; margin-top:-35% ;">{{$nbrreparation}}</a></h1>  -->
                            <div class="row">
                                    <div class="col-md-4 text-right">
                                        <h1><a href="{{ route('tache.list') }}" style="font-size:180% ;">{{$taches}}</a></h1> 

                                    </div>
                                    
                                    <div class="col-md-8">
                                        <br>
                                        <h6>Taches <br>Enreigistrés</h6>
                                    </div>
                            
                        </div>
                
                    <!-- Fin link -->
                </div>
            </div>
            <!-- Employé  -->
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header text-white text-center" style="background-color: blue;">{{ __('Employés') }}</div>
                    <div class="row">
                                    <div class="col-md-4 text-right">
                                        <h1><a href="{{ route('user.index') }}" style="font-size:180% ;">{{$users}}</a></h1> 

                                    </div>
                                    
                                    <div class="col-md-8">
                                        <br>
                                        <h6>Employés</h6>
                                    </div>
                            </div>
                </div>
            </div>
                <!-- Client -->
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header text-white text-center" style="background-color: blue;">{{ __('Client') }}</div>
                            <div class="row">
                                        <div class="col-md-4 text-right">
                                            <h1><a href="{{ route('clientIndex') }}" style="font-size:180% ;">{{$clients}}</a></h1> 
                                        </div>
                                        <div class="col-md-8">
                                            <br>
                                            <h6>Clients<br>enreigistrés</h6>
                                        </div>
                            </div>
                    </div>
                </div>
                <!-- encours -->
                <div class="col-md-3">
                            <div class="card">
                                <div class="card-header text-white text-center" style="background-color: blue;">{{ __('Fournisseur') }}</div>
                                    <div class="row">
                                                <div class="col-md-4 text-right">
                                                    <h1><a href="{{ route('fournisseur3') }}" style="font-size:180% ;">{{$fournisseurs}}</a></h1> 
                                                </div>
                                                <div class="col-md-8">
                                                    <br>
                                                    <h6>Fournisseurs<br>enreigistrés</h6>
                                                </div>
                                        
                            </div>
                        </div>
                </div>

       
    </div>
</div>       
@endsection