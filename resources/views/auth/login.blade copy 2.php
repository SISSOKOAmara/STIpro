<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="stylesheet" href="{{asset('assetss/css/stylelogin.css')}}">

        <!-- <link rel="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
        <link rel="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"> -->
        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Scripts -->
    
    </head>
    {{-- <body style="background-image:url('/assetss/images/stiLogo.jpg');"> --}}
    <body>
        <div class="container">
            <div class="col-md-12 col-sm-12">
                    <!-- Login 2 -->
                    <form class="login" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="container"> 
                                <div class="row justify-content-center">

                                            <!-- Email -->
                                    {{-- <div class="row mb-3" style="margin-top: -50px;"> --}}
                                    <div class="row mb-3 sm-3" style="margin-top: -50px;">
                                        <div class="col-md-12 col-sm-12">
                                            <input id="email" placeholder="Email" style="margin-top: 50px; height:20px; width: 300px ; border: 1px solid black; border-raduis:10px" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                        </div>
                                    </div>
                                    <!-- Fin email -->

                                            <div class="row mb-3">
                                                <div class="col-md-12">
                                                    <input id="password" placeholder="Mot de passe" type="password" style="margin-top: 20px; height:20px; background-color:rgb(251, 241, 241); width: 300px ; border-raduis:10px" class="form-control @error('password') is-invalid @enderror" name="password" required >

                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                                    <div class="row mb-3">
                                                        <div class="col-md-6 offset-md-4">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                                <label class="form-check-label" for="remember">
                                                                    {{ __('Reste connecter') }}
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-0">
                                                        <div class="col-md-8 offset-md-4">
                                                            <button type="submit" class="btn btn-primary">
                                                                {{ __('Login') }}
                                                            </button>

                                                            @if (Route::has('password.request'))
                                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                                    {{ __('Mot de passe oublié ?') }}
                                                                </a>
                                                            @endif
                                                        </div>
                                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- <input type="text" placeholder="Username"> -->
                    </form>
            </div>
        </div>
    </body>
</html>