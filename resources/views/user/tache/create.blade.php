@extends('layouts.slave')

@section('content')


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


          
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Ajouter tache') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('tache.register2') }}">
                        @csrf
        
                        <div class="row mb-3">
                            <label for="designation" class="col-md-2 col-form-label text-md-end">{{ __('Lieu') }}</label> 
                            <div class="col-md-3">
                                <select name="Lieu">
                                    <option  selected disabled>Lieu</option>
                                    <option value="Interne">Interne</option>
                                    <option value="Externe">Externe</option>
                                </select>
                            </div>
                            
                        </div>
                    
                    <div class="row mb-3">
                        <label for="designation" class="col-md-2 col-form-label text-md-end">{{ __('Appareils') }}</label> 
                        <div class="col-md-3">
                    <select name="reparation_id">
                      <option  selected disabled>Appareils</option>
                        @foreach( $repara as $reparations )
                      <option value="{{$reparations->id}}">{{$reparations->marque}} - {{$reparations->model}} - {{$reparations->panne}}</option>
                     @endforeach
                    </select></div>
                    </div>
                    

                    
                    <div hidden class="row mb-3">
                    <label for="Lieu" class="col-md-2 col-form-label text-md-end">{{ __('Personne') }}</label>
                    <div class="col-md-3">
                    <select name="user_id">
                      <option value="{{$user}}">{{$user}}</option>
                     </select>
                    </div>
                    </div>
                    
                         <div class="row mb-3">
                            <label for="designation" class="col-md-2 col-form-label text-md-end">{{ __('designation') }}</label>

                            <div class="col-md-6">
                                <input id="designation" type="text" class="form-control @error('Designation') is-invalid @enderror" name="designation" value="{{ old('nom') }}" required autocomplete="nom" autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="Etat" class="col-md-2 col-form-label text-md-end">{{ __('Etat') }}</label>
                            <div class="col-md-6">
                            <div class="col-md-3">
                                <select name="Etat">
                                    <option  selected disabled>Etat</option>
                                    <option value="Attente">Attente</option>
                                    <option value="En cours">En cours</option>
                                    <option value="Effectué">Effectué</option>
                                </select>
                            </div>  
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         <div class="row mb-3">
                            <label for="delai" class="col-md-2 col-form-label text-md-end">{{ __('Delai') }}</label>

                            <div class="col-md-6">
                                <input id="dalai" type="datetime-local" class="form-control @error('type') is-invalid @enderror" name="delai" value="">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="row mb-0">
                            <div class="col-md-4 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Ajouter') }}
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