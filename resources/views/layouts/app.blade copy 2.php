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

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">

        <!-- debut Nav 1 -->
        <div class="navbar navbar-expand-md navbar-light bg-white shadow-sm" id="Nav1" style="float:left; text-align:center;height: 20%;" >
       
            <div class="container-fuid" style="margin-bottom:60% ;">
                
                    <div class="row" style="height: 20%;">
            
                        <ul class="nav flex-column" style="margin-top: 20%;">
                           
                            
                            
                            <li class="nav-item">
                                 <a href="{{ route('appareilIndex') }}">Appareil</a>
                                <!-- <a class="nav-link active" href="" style="width:100% ;"><h3> Accueil</h3></a> -->
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('reparationIndex') }}">Reparations</a>
                                <!-- <a class="nav-link" href=""><h2>Courrier entrant</h2></a> -->
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('clientIndex') }}">Client</a>
                                <!-- <a class="nav-link" href=""><h3>Courrier sortant</h3></a> -->
                            </li>
                    <!-- {{ ('courriersortant') }} -->
                        </ul>
                    </div>
            
            </div>
        </div>
<!-- </div> -->
        <!-- Fin Nav 2 -->

        <!-- debut Nav 1 -->
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
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
