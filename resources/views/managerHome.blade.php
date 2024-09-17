@extends('layouts.gerant')


@section('content')

<div class="container">
    <div class="row">
            <!-- reration -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header text-white text-center" style="background-color: blue;">{{ __('Réparations') }}</div>
                                                                
                            <!-- <h1><a href="{{ route('reparationIndex') }}" style="font-size:380% ; float:left; margin-top:-35% ;">{{$nbrreparation}}</a></h1>  -->
                            <div class="row">
                                    <div class="col-md-6 text-right">
                                        <h1><a href="{{ route('reparationIndex3') }}" style="font-size:180% ;">{{$nbrreparation}}</a></h1> 

                                    </div>
                                    
                                    <div class="col-md-6">
                                        <br>
                                        <h6>Appareils <br>Enreigistrés</h6>
                                    </div>
                            
                        </div>
                
                    <!-- Fin link -->
                </div>
            </div>
            
            <!-- repare 2 -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header text-white text-center" style="background-color: blue;">{{ __('Réparé') }}</div>
                    <div class="row">
                                    <div class="col-md-6 text-right">
                                        <h1><a href="{{ route('reparationRepare3') }}" style="font-size:180% ;">{{$nbrrepare}}</a></h1> 

                                    </div>
                                    
                                    <div class="col-md-6">
                                        <br>
                                        <h6>Appareils<br>réparés</h6>
                                    </div>
                            </div>
                </div>
            </div>
                                <!-- encours -->
            <div class="col-md-4">
                <div class="card">
                     <div class="card-header text-white text-center" style="background-color: blue;">{{ __("Réparés / Récuperés") }}</div>
                         <div class="row">
                             <div class="col-md-6 text-right">
                                   <h1><a href="{{ route('reparationrecupere3') }}" style="font-size:180% ;">{{$nbrRecupere}}</a></h1> 
                                        </div>
                                              <div class="col-md-6">
                                                  <br>
                                                     <h6>Réparés / <br>Récuperés</h6>
                                                </div>
                                                
                        </div>
                </div>
            </div>
    </div>
    <div class="row mt-5"></div>
    <!-- 2eme ROW -->
    <div class="row">
                        <!-- encours -->
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header text-white text-center" style="background-color: blue;">{{ __('Encours') }}</div>
                                    <div class="row">
                                                <div class="col-md-6 text-right">
                                                    <h1><a href="{{ route('reparationEncours3') }}" style="font-size:180% ;">{{$nbrEncours}}</a></h1> 
                                                </div>
                                                <div class="col-md-6">
                                                    <br>
                                                    <h6>En cours de <br>reparation</h6>
                                                </div>
                                                
                                    </div>
                                </div>
                        </div>

                                    <!-- Attente -->
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header text-white text-center" style="background-color: blue;">{{ __('Attente') }}</div>
                                    <div class="row">
                                                <div class="col-md-6 text-right">
                                                    <h1><a href="{{ route('reparationattente3') }}" style="font-size:180% ;">{{$nbrattente}}</a></h1> 
                                                </div>
                                                <div class="col-md-6">
                                                    <br>
                                                    <h6>Appareil<br>en attente</h6>
                                                </div>
                                    </div>
                            </div>
                        </div>
                    <!-- encours -->
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header text-white text-center" style="background-color: blue;">{{ __('Annulé') }}</div>
                                <div class="row">
                                            <div class="col-md-6 text-right">
                                                <h1><a href="{{ route('reparationannule3') }}" style="font-size:180% ;">{{$nbrcancel}}</a></h1> 
                                            </div>
                                            <div class="col-md-6">
                                                <br>
                                                <h6>Réparations <br> Annulé </h6>
                                            </div>
                                    
                                </div>
                            </div>
                    </div>
        </div>

        <div class="row mt-5">
        </div>
        
        <div class="row">

            <!-- taches -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header text-white text-center" style="background-color: blue;">{{ __('Taches') }}</div>
                                                                
                            <!-- <h1><a href="{{ route('reparationIndex') }}" style="font-size:380% ; float:left; margin-top:-35% ;">{{$nbrreparation}}</a></h1>  -->
                            <div class="row">
                                    <div class="col-md-6 text-right">
                                        <h1><a href="{{ route('tache.list3') }}" style="font-size:180% ;">{{$taches}}</a></h1> 

                                    </div>
                                    
                                    <div class="col-md-6">
                                        <br>
                                        <h6>Taches <br>Enreigistrés</h6>
                                    </div>
                            
                        </div>
                
                    <!-- Fin link -->
                </div>
            </div>
            <!-- Employé  -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header text-white text-center" style="background-color: blue;">{{ __('Employés') }}</div>
                    <div class="row">
                                    <div class="col-md-6 text-right">
                                        <h1><a href="{{ route('user.index2') }}" style="font-size:180% ;">{{$users}}</a></h1> 

                                    </div>
                                    
                                    <div class="col-md-6">
                                        <br>
                                        <h6>Employés</h6>
                                    </div>
                            </div>
                </div>
            </div>
                <!-- Client -->
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header text-white text-center" style="background-color: blue;">{{ __('Client') }}</div>
                            <div class="row">
                                        <div class="col-md-6 text-right">
                                            <h1><a href="{{ route('clientIndex3') }}" style="font-size:180% ;">{{$clients}}</a></h1> 
                                        </div>
                                        <div class="col-md-6">
                                            <br>
                                            <h6>Clients<br>enreigistrés</h6>
                                        </div>
                            </div>
                    </div>
                </div>

       
    </div>
</div> 

{{-- <script type="text/javascript">
    // Script JS pour afficher une alerte à l'ouverture de la page
    window.onload = function() {
        alert("Bienvenue {{ Auth::user()->prenom }} {{ Auth::user()->name }} ! j'espère que tu vas effectuer beaucoup des taches aujourd'hui");
    };
</script>  --}}
{{-- <script type="text/javascript">
    // Script JS pour afficher une confirmation à l'ouverture de la page
    window.onload = function() {
        // Affiche la boîte de confirmation avec "Oui" et "Non"
        var reponse = confirm("Bienvenue {{ Auth::user()->prenom }} {{ Auth::user()->name }} ! j'espère que tu vas effectuer beaucoup des taches aujourd'hui");
        
        if (reponse) {
            alert("Vous avez choisi Oui !");
        } else {
            alert("Vous avez choisi Non !");
        }
    };
</script> --}}

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
                alert("Alors ton avis est prit en compte, Tu as choisi Non !");
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
