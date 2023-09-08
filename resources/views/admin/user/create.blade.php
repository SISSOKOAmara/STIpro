@extends('layouts.Master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header text-center">{{ __('Ajouter employé') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('user.store2') }}" enctype="multipart/form-data">
                    @csrf
                <div class="row mb-3 text-center">
                                <!-- debut scrip -->
                      @if(session()->has("success"))
                      <div class="alert alert-succes">
                          {{session()->get('success')}}
                        </div>
                          @endif

                          @if ($errors ->any())
                        <ul class="alert alert-danger">
                          @foreach ($errors->all() as $error)
                                    <li>{{$error }}</li>
                            @endforeach
                        </ul>
                        @endif


                            <div class="col-md-4">
                                <input id="name" type="text" placeholder="Nom" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    
                            <div class="col-md-4">
                                <input id="prenom" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Prenom" name="prenom" value="{{ old('prenom') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           
                        </div>
                         <div class="col-md-4">

                        <select name="type">
                            <option  selected disabled>Type</option>
                            <option value="1">Admin</option>
                            <option value="2">Gérant</option>
                            <option value="0">technicien</option>
                        </select>
                        </div>
                </div>
                         <div class="row">
                       
                        
                           
                                <input id="email" type="email" placeholder="Email" class="col-md-4 form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           
                       
                      
                     
                            <div class="col-md-4">
                                <input id="password" placeholder="Mot de passe" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    
                            <div class="col-md-4">
                                <input id="password-confirm" placeholder="confirmation mot de passe" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                             <div class="col m-d-3 mt-2">
                                <label for="input-small" class=" form-control-label">Photo</label> 
                                <input type="file" id="" name="photo" > 
                            </div>
                    
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
