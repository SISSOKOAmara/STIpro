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
    <div class="row justify-content-center text-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">{{ __('Ajouter un Appareil') }}</div>

                <div class="card-body text-black text-center">
                    <form method="POST" action="{{route('repair.add')}}">
                        @csrf
                        
                        
                    <div class="row mb-1">
                        <label for="designation" class="col-md-4 col-form-label text-right">{{ __('Client') }}</label> 
                        <div class="col-md-6 text-left">
                            <select name="client_id" required >
                            <option  selected disabled>Client</option>
                                @foreach( $clients as $client )
                            <option value="{{$client->id}}">{{$client->nom}} - {{$client->numero}}</option>
                            @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-1">
                            <label class="col-md-4 col-form-label text-right">{{ __('Categorie') }}</label>
                            <div class="col-md-6 text-left">
                            <select name="categorie_id" >
                                <option selected disabled>categorie</option>
                                 @foreach($categories as $categorie)
                                <option value="{{$categorie->id}}">{{$categorie->nom}}</option>
                                  @endforeach
                            </select>
                            </div>
                        </div>


                        <div class="row mb-1">
                            <label for="marque" class="col-md-4 col-form-label text-right">{{ __('marque') }}</label>

                            <div class="col-md-6">
                                <input id="marque" type="text" class="form-control" name="marque" value="" autocomplete="categorie" autofocus>
                            </div>
                        </div>

                        <div class="row mb-1">
                            <label for="model" class="col-md-4 col-form-label text-right">{{ __('model') }}</label>

                            <div class="col-md-6">
                                <input id="model" type="text" class="form-control" name="model" value="" autocomplete="model" autofocus>
                            </div>
                        </div>
                        
                        <div class="row mb-1">
                            <label for="note" class="col-md-4 col-form-label text-right">{{ __('note') }}</label>
                            <div class="col-md-6">
                                <input id="note" type="text" class="form-control" name="note" value=""  autocomplete="note" autofocus>
                            </div>
                        </div>

                            <!-- Hiden -->
                                <input id="user_id" hidden type="integer"  class="form-control" name="user_id" value="{{ Auth::user()->id }}" autofocus>
                                <input id="etat" hidden type="text"  class="form-control" name="etat" value="attente" autofocus>
                          <!-- fin hiden -->
                        <div class="row mb-1">
                            <label for="panne" class="col-md-4 col-form-label text-right">{{ __('panne') }}</label>

                            <div class="col-md-6">
                                <input id="panne" type="text" class="form-control" name="panne" value="" autocomplete="panne" autofocus>
                            </div>
                        </div>

                        <div class="row mb-1">
                            <label for="prix" class="col-md-4 col-form-label text-right">{{ __('prix') }}</label>

                            <div class="col-md-6">
                                <input id="prix" type="integer" class="form-control" name="prix" value="" autocomplete="prix" autofocus>
                            </div>
                        </div>

                        <div class="row mb-1">
                            <label for="paye" class="col-md-4 col-form-label text-right">{{ __('paye') }}</label>

                            <div class="col-md-6">
                                <input id="paye" type="integer" class="form-control" name="paye" value="" autocomplete="paye" autofocus>
                            </div>
                        </div>
                        
                        <div class="row mb-1">
                            <label for="rdv" class="col-md-4 col-form-label text-right">{{ __('RDV') }}</label>

                            <div class="col-md-6">
                                <input id="rdv" type="date" class="form-control" name="rdv" >
                            </div>
                        </div>                     

                        <div class="row mb-0">
                            <div class="col-md-3 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Enregister') }}
                                </button>
                            </div>
                            
                            <div class="col-md-1 offset-md-1">
                                <button class="btn btn-warning">
                                    {{ __('Annuler') }}
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