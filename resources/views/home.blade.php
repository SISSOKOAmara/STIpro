@extends('layouts.Slave')

  

@section('content')

<div class="container">
    <div class="row">
            
            
                <!-- Attente -->
                <div class="col-md-4">
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
                <div class="col-md-4">
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

       
 
            <!-- reration -->
            <div class="col-md-4">
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
           

       
    </div>

@endsection