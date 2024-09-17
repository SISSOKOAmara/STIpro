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
    <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
       
    {{-- </head> --}}
    <body style="background-image:url('/assetss/images/stiLogo.jpg');">
        
    
        <body>
        <div class="background">
            <div class="shape"></div>
            <div class="shape"></div>
        </div>
        <form class="login" method="POST" action="{{ route('login') }}" style="background-color: rgb(77, 73, 73); opacity:unset">
            @csrf

            <h3>Se connecter</h3>
    
            <label for="username">Email</label>
                <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                @enderror
    
            <label for="password">Mot de passe</label>
                <input id="password" placeholder="Mot de passe" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required >

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            {{-- <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

            <label class="form-check-label" for="remember">
                {{ __('Reste connecter') }} --}}
                
                
            <button type="submit" >Se connecter</button>
            {{-- <div class="social">
              <div class="go"><i class="fab fa-google"></i>  Google</div>
              <div class="fb"><i class="fab fa-facebook"></i>  Facebook</div>
            </div> --}}
        </form>

        
       
    </body>
    
</html>
{{-- 



    
             
        
                       
             

        
                    
              
</form> --}}