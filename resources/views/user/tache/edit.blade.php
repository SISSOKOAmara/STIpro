@extends('layouts.Slave')

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
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary">{{ __('Modifier Tache') }}</div>

                <div class="card-body bg-white text-black">
              
                <div class="row mb-3">
                            <label for="designation" class="col-md-4 col-form-label text-md-end">{{ __('Client') }}</label>
                            <div class="col-md-6">
                                <input readonly id="designation" type="text" class=" @error('Designation') is-invalid @enderror bg-white text-black border-0" name="designation" value="{{$modif->reparation->client->nom}}">
                            </div>
                </div>
                <div class="row mb-3">
                            <label for="designation" class="col-md-4 col-form-label text-md-end">{{ __('Appareil') }}</label>
                            <div class="col-md-6">
                                <input readonly id="designation" type="text" class=" @error('Designation') is-invalid @enderror bg-white text-black border-0" name="designation" value="{{$modif->reparation->marque}} {{$modif->reparation->model}}">
                            </div>
                </div>
                    <form method="POST" action="{{ route('tache.update2' ,$modif->id) }}">
                        @csrf
                        @method('PATCH')                    
                 
                    
                        <div class="row mb-3">
                            <label for="designation" class="col-md-4 col-form-label text-md-end">{{ __('designation') }}</label>
                            <div class="col-md-6">
                                <input readonly id="designation" type="text" class=" @error('Designation') is-invalid @enderror bg-white text-black border-0" name="designation" value="{{$modif->designation}}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="Etat" class="col-md-4 col-form-label text-md-end">{{ __('Etat') }}</label>
                            <div class="col-md-6">
                                <div class="col-md-3">
                                    <select name="etat">
                                        <option selected disabled value="{{$modif->etat}}">{{$modif->etat}}</option>
                                        <option value="Attente">Attente</option>
                                        <option value="En cours">En cours</option>
                                        <option value="Effectu??">Effectu??</option>
                                    </select>
                                </div>  
                            </div>
                        </div>

                        
                        <div class="row mb-0">
                            <div class="col-md-4 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Modifier') }}
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