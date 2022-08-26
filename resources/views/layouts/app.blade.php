<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">

        <!-- debut Nav 1 -->
        <div class="navbar navbar-expand-md navbar-light bg-primary shadow-sm text-white fixed-left" id="Nav1" style="float:left; width:15%; " >
       
            <div class="container">
                
                    <div class="row justify-content-center" >
                        <div class="col-md-12">
                        <ul class="nav flex-column" style="margin-top: 20%;" >
                           
                            <li class="nav-item">
                                 <a href="{{ route('admin.home') }}"><h3 class="text-white"><i class="bi bi-house-fill text-white"></i>&nbsp; Dashboard</h3></a>
                                <!-- <a class="nav-link active" href="" style="width:100% ;"><h3> Accueil</h3></a> -->
                            </li>
                            <hr>
                            <!-- <li class="nav-item " class="text-white">
                                <a href=""><h3 class="text-white">Menu</h3></a>
                                <a class="nav-link" href=""><h3>Courrier sortant</h3></a> -->
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                    
                                <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Components</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="ui-buttons.html">Buttons</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="ui-badges.html">Badges</a></li>
                            <li><i class="fa fa-bars"></i><a href="ui-tabs.html">Tabs</a></li>
                            <li><i class="fa fa-share-square-o"></i><a href="ui-social-buttons.html">Social Buttons</a></li>
                            <li><i class="fa fa-id-card-o"></i><a href="ui-cards.html">Cards</a></li>
                            <li><i class="fa fa-exclamation-triangle"></i><a href="ui-alerts.html">Alerts</a></li>
                            <li><i class="fa fa-spinner"></i><a href="ui-progressbar.html">Progress Bars</a></li>
                            <li><i class="fa fa-fire"></i><a href="ui-modals.html">Modals</a></li>
                            <li><i class="fa fa-book"></i><a href="ui-switches.html">Switches</a></li>
                            <li><i class="fa fa-th"></i><a href="ui-grids.html">Grids</a></li>
                            <li><i class="fa fa-file-word-o"></i><a href="ui-typgraphy.html">Typography</a></li>
                        </ul>
                    </li>
            </div>

                            <hr>
                            <li class="nav-item">
                                <a href="{{ route('clientIndex') }}" class="text-white"><h3 class="text-white">Client</h3></a>
                                <!-- <a class="nav-link" href=""><h3>Courrier sortant</h3></a> -->
                            </li>
                            <hr>
                            <li class="nav-item">
                                 <a href="{{ route('appareilIndex') }} " class="text-white"><h3 class="text-white">Appareil</h3></a>
                                <!-- <a class="nav-link active" href="" style="width:100% ;"><h3> Accueil</h3></a> -->
                            </li>
                            <hr>
                            <li class="nav-item">
                                <a href="{{ route('reparationIndex') }}" class="text-white"><h4>Maintenance<h4></a>
                                <!-- <a class="nav-link" href=""><h2>Courrier entrant</h2></a> -->
                            </li>
                            <hr>
                            <li class="nav-item">
                                <a href="{{ route('produit.index') }}" class="text-white"><h3>Vente</h3></a>
                                <!-- <a class="nav-link" href=""><h2>Courrier entrant</h2></a> -->
                            </li>
                            <hr>
                            <li class="nav-item">
                                 <a href="{{ route('produit.index') }}"><h3 class="text-white">Produit</h3></a>
                                <!-- <a class="nav-link active" href="" style="width:100% ;"><h3> Accueil</h3></a> -->
                            </li>
                            <!-- <li class="nav-item">
                                 <a href="" class="text-white"><h3>Facture</h3></a>
                                <a class="nav-link active" href="" style="width:100% ;"><h3> Accueil</h3></a>
                            </li> -->
                            <hr>
                           <li class="nav-item">
                                 <a href="{{ route('tache.index') }}" class="text-white"> <h3><i class="bi bi-list-stars"></i>Taches</h3></a>
                                <!-- <a class="nav-link active" href="" style="width:100% ;"><h3> Accueil</h3></a> -->
                            </li>
                            <hr>
                            <!-- <li class="nav-item">
                                 <a href="" class="text-white"><h3>Prestation</h3></a>
                                 <a class="nav-link active" href="" style="width:100% ;"><h3> Accueil</h3></a>
                            </li>
                            <hr> -->

                            <li class="nav-item">
                                 <a href="{{ route('user.index') }}" class="text-white"><h3><i class="bi bi-person-lines-fill"></i>&nbsp;Compte</h3></a>
                                <!-- <a class="nav-link active" href="" style="width:100% ;"><h3> Accueil</h3></a> -->
                            </li>
                         </ul> 
                        </div>
                    </div>

            </div>
        </div>
<!-- </div> -->
        <!-- Fin Nav 2 -->

        <!-- debut Nav 1 -->
        <nav class="navbar navbar-expand-md navbar-light  shadow-sm" style="background-color:#ff8000 ;">
            <div class="container">
                <a class="navbar-brand">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
<!-- FIN Nav 2 -->
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
