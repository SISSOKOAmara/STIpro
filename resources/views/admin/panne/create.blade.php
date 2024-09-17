@extends('layouts.Master')

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
                <div class="card-header text-center text-white" style="background-color: #0201FD">{{ __('Ajouter panne') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('panne.register', $appareil->id) }}">
                        @csrf


                        <div class="row mb-3">
                            <label for="reparation_id" class="col-md-4 col-form-label text-md-end">{{ __('Appareils') }}</label> 
                            <div class="col-md-6">
                                <select name="reparation_id">
                                    <option value="{{$appareil->id}}">{{$appareil->client->nom}}-{{$appareil->marque}} - {{$appareil->model}}</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="panne" class="col-md-4 col-form-label text-md-end">{{ __('Panne') }}</label> 
                            <div class="col-md-6">
                                <input id="panne" type="text" class="form-control @error('panne') is-invalid @enderror" name="panne" value="{{ old('panne') }}" required autocomplete="panne" autofocus>
                            </div>
                        </div>
                    
                    
                        <div class="row mb-3">
                            <label for="prix" class="col-md-4 col-form-label text-md-end">{{ __('Prix') }}</label>

                            <div class="col-md-3">
                                <input id="prix" type="integer" class="form-control @error('prix') is-invalid @enderror" name="prix" value="{{ old('prix') }}" required autocomplete="prix" autofocus>
                            </div>
                        </div>
                    
                         <div class="row mb-3">
                            <label for="paye" class="col-md-4 col-form-label text-md-end">{{ __('Payé') }}</label>

                            <div class="col-md-3">
                                <input id="paye" type="integer" class="form-control @error('paye') is-invalid @enderror" name="paye" value="{{ old('paye') }}" required autocomplete="paye" autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="Etat" class="col-md-4 col-form-label text-md-end">{{ __('Etat') }}</label>
                            <div class="col-md-6">
                            <div class="col-md-3">
                                <select name="etat">
                                    <option  selected disabled>Etat</option>
                                    <option value="Attente">Attente</option>
                                    <option value="En cours">En cours</option>
                                    <option value="Fait">Fait</option>
                                </select>
                            </div>  
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        
                        <div class="row mb-0">
                            <div class="col-md-4 offset-md-4">
                                <button type="submit" class="btn" style="background-color: #0201FD">
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