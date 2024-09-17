@extends('layouts.Master')

  

@section('content')

<div class="container">
    <div class="row">
            <!-- reration -->
            <div class="col-md-4">
                <div class="card pb-4">
                    <div class="card-header text-white text-center" style="background-color: blue;">{{ __('Réparations') }}</div>
                                                                
                            <!-- <h1><a href="{{ route('reparationIndex') }}" style="font-size:380% ; float:left; margin-top:-35% ;">{{$nbrreparation}}</a></h1>  -->
                            <div class="row">
                                    <div class="col-md-7 text-right">
                                        <h1><a href="{{ route('reparationIndex') }}" style="font-size:180% ;">{{$nbrreparation}}</a></h1> 

                                    </div>
                                    
                                    <div class="col-md-5">
                                        <br>
                                        <h6>Appareils <br>Enreigistrés</h6>
                                    </div>
                            
                            </div>
                </div>
            </div>
            <!-- reparés -->
            <div class="col-md-4">
                <div class="card pb-4">
                    <div class="card-header text-white text-center" style="background-color: blue;">{{ __("Réparés") }}</div>
                    <div class="row">
                                    <div class="col-md-7 text-right">
                                        <h1><a href="{{ route('reparationRepare') }}" style="font-size:180% ;">{{$nbrrepare}}</a></h1> 

                                    </div>
                                    
                                    <div class="col-md-5">
                                        <br>
                                        <h6>Appareils <br> Réparés</h6>
                                    </div>
                            </div>
                </div>
            </div>
                <!-- Attente -->
                <div class="col-md-4">
                    <div class="card pb-4">
                        <div class="card-header text-white text-center" style="background-color: blue;">{{ __('Attente') }}</div>
                            <div class="row">
                                        <div class="col-md-7 text-right">
                                            <h1><a href="{{ route('reparationattente') }}" style="font-size:180% ;">{{$nbrattente}}</a></h1> 
                                        </div>
                                        <div class="col-md-5">
                                            <br>
                                            <h6>Appareil<br>en attente</h6>
                                        </div>
                            </div>
                    </div>
                </div>
    </div>
<div class="row mt-5"></div>
        
            <div class="row mt-2">
                                    <!-- encours -->
                    <div class="col-md-4">
                        <div class="card pb-4">
                            <div class="card-header text-white text-center" style="background-color: blue;">{{ __('Encours') }}</div>
                                <div class="row">
                                            <div class="col-md-7 text-right">
                                                <h1><a href="{{ route('reparationEncours') }}" style="font-size:180% ;">{{$nbrEncours}}</a></h1> 
                                            </div>
                                            <div class="col-md-5">
                                                <br>
                                                <h6>En cours de <br>reparation</h6>
                                            </div>
                                    
                                </div>
                        </div>
                    </div>
                {{--  --}}
            <div class="col-md-4">
                <div class="card pb-4">
                    <div class="card-header text-white text-center" style="background-color: blue;">{{ __("Réparés & Récuperés") }}</div>
                                                                
                            <!-- <h1><a href="{{ route('reparationIndex') }}" style="font-size:380% ; float:left; margin-top:-35% ;">{{$nbrreparation}}</a></h1>  -->
                            <div class="row">
                                    <div class="col-md-7 text-right">
                                        <h1><a href="{{ route('reparationrecupere') }}" style="font-size:180% ;">{{$Recupere}}</a></h1> 

                                    </div>
                                    
                                    <div class="col-md-5">
                                        <br>
                                        <h6>Appareils <br>Récuperés</h6>
                                    </div>
                            
                        </div>
                
                </div>
            </div>
                 <!-- Récuperés -->
                 <div class="col-md-4">
                    <div class="card pb-4">
                        <div class="card-header text-white text-center" style="background-color: blue;">{{ __('Annulé') }}</div>
                                                                    
                                <!-- <h1><a href="{{ route('reparationIndex') }}" style="font-size:380% ; float:left; margin-top:-35% ;">{{$nbrreparation}}</a></h1>  -->
                                <div class="row">
                                        <div class="col-md-7 text-right">
                                            <h1><a href="{{ route('reparationannule') }}" style="font-size:180% ;">{{$cancel}}</a></h1> 
    
                                        </div>
                                        
                                        <div class="col-md-5">
                                            <br>
                                            <h6>Réparations <br>Annulés</h6>
                                        </div>
                                
                            </div>
                    
                    </div>
                </div>

            </div>


       
    
<div class="row mt-5"></div>
    <!-- 2eme ROW -->
    <div class="row">

            <!-- Employé  -->
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header text-white text-center" style="background-color: blue;">{{ __('Employés') }}</div>
                    <div class="row">
                                    <div class="col-md-7 text-right">
                                        <h1><a href="{{ route('user.index') }}" style="font-size:180% ;">{{$users}}</a></h1> 

                                    </div>
                                    
                                    <div class="col-md-5">
                                        <br>
                                        <h6>Employés</h6>
                                    </div>
                            </div>
                </div>
            </div>

            {{-- Taches --}}
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header text-white text-center" style="background-color: blue;">{{ __('Taches') }}</div>
                                                                
                            <!-- <h1><a href="{{ route('reparationIndex') }}" style="font-size:380% ; float:left; margin-top:-35% ;">{{$nbrreparation}}</a></h1>  -->
                            <div class="row">
                                    <div class="col-md-7 text-right">
                                        <h1><a href="{{ route('tache.list') }}" style="font-size:180% ;">{{$taches}}</a></h1> 

                                    </div>
                                    
                                    <div class="col-md-5">
                                        <br>
                                        <h6>Taches <br>Enreigistrés</h6>
                                    </div>
                            
                        </div>
                
                </div>
            </div>
            {{-- Fin tache --}}
                <!-- Client -->
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header text-white text-center" style="background-color: blue;">{{ __('Client') }}</div>
                            <div class="row">
                                        <div class="col-md-7 text-right">
                                            <h1><a href="{{ route('clientIndex') }}" style="font-size:180% ;">{{$clients}}</a></h1> 
                                        </div>
                                        <div class="col-md-5">
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
                                                <div class="col-md-6 text-right">
                                                    <h1><a href="{{ route('fournisseur') }}" style="font-size:180% ;">{{$fournisseurs}}</a></h1> 
                                                </div>
                                                <div class="col-md-6">
                                                    <br>
                                                    <h6>Fournisseurs<br>enreigistrés</h6>
                                                </div>
                                        
                            </div>
                        </div>
                </div>

       
    </div>
</div>  
<script type="text/javascript">
    // Fonction pour vérifier si l'alerte a déjà été affichée aujourd'hui
    function afficherAlerteSiNecessaire() {
        var aujourdHui = new Date().toLocaleDateString(); // Récupère la date actuelle (jj/mm/aaaa)
        var dernierAffichage = localStorage.getItem('alerteDate');

        // Si l'alerte n'a pas été affichée aujourd'hui
        if (dernierAffichage !== aujourdHui) {
            var reponse = confirm("Bienvenue {{ Auth::user()->prenom }} {{ Auth::user()->name }} ! j'espère que tu vas effectuer beaucoup des taches aujourd'hui?");

            if (reponse) {
                alert("Bien, Tu as choisi de bien travailler aujord'hui ! C'est noté. Merci");
            } else {
                alert("Alors ton avis est aussi prit en compte, Vous avez choisi Non !");
            }

            // Stocke la date du jour dans le localStorage
            localStorage.setItem('alerteDate', aujourdHui);
        }
    }

    window.onload = function() {
        afficherAlerteSiNecessaire();
    };
</script>   
@endsection