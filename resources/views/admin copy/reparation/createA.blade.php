@extends('layouts.app')

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
                <div class="card-header">{{ __('Ajouter à réparer') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('reparationregister') }}">
                        @csrf
                        
                        
                        <div class="row mb-3">
                        <label for="designation" class="col-md-4 col-form-label text-md-end">{{ __('Client') }}</label> 
                        <div class="col-md-3">
                    <select name="client_id" required>
                      <option  selected disabled>Client</option>
                        @foreach( $clients as $client )
                      <option value="{{$client->id}}">{{$client->nom}} - {{$client->numero}}</option>
                     @endforeach
                    </select></div>
                    </div>
                        <div class="row mb-1">
                            <label for="categorie" required class="col-md-1 col-form-label text-md-end">{{ __('Categorie') }}</label> 
                            <div class="col-md-3">
                                <select name="categorie" required>
                                    <option  selected disabled>Categorie</option>
                                    <option value="Portable">Portable</option>
                                    <option value="Bureau">Bureautique</option>
                                    <option value="Camera">Camera</option>
                                    <option value="Reseau">Reseau</option>
                                    <option value="Projecteur">Projecteur</option>
                                    <option value="Imprimante">Imprimante</option>
                                </select>
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="marque" class="col-md-4 col-form-label text-md-end">{{ __('marque') }}</label>

                            <div class="col-md-6">
                                <input id="marque" type="text" class="form-control" name="marque" value="" required autocomplete="categorie" autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="model" class="col-md-4 col-form-label text-md-end">{{ __('model') }}</label>

                            <div class="col-md-6">
                                <input id="model" type="text" class="form-control" name="model" value="" autocomplete="model" autofocus>
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label for="etat" class="col-md-4 col-form-label text-md-end">{{ __('note') }}</label>
                            <div class="col-md-6">
                                <input id="note" type="text" class="form-control" name="note" value=""  autocomplete="note" autofocus>
                            </div>
                        </div>

                            <!-- Hiden -->
                                <input id="user_id" hidden type="integer"  class="form-control" name="user_id" value="{{ Auth::user()->id }}" autofocus>
                          <!-- fin hiden -->
                        <div class="row mb-3">
                            <label for="panne" class="col-md-4 col-form-label text-md-end">{{ __('panne') }}</label>

                            <div class="col-md-6">
                                <input id="panne" type="text" class="form-control" name="panne" value="" autocomplete="panne" autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="prix" class="col-md-4 col-form-label text-md-end">{{ __('prix') }}</label>

                            <div class="col-md-6">
                                <input id="prix" type="decimale" class="form-control" name="prix" value="" autocomplete="prix" autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="paye" class="col-md-4 col-form-label text-md-end">{{ __('paye') }}</label>

                            <div class="col-md-6">
                                <input id="paye" type="decimale" class="form-control" name="paye" value="" autocomplete="paye" autofocus>
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label for="rdv" class="col-md-4 col-form-label text-md-end">{{ __('RDV') }}</label>

                            <div class="col-md-6">
                                <input id="rdv" type="date" class="form-control" name="rdv" >
                            </div>
                        </div> 
                        <div class="row mb-2">
                            <label for="categorie" class="col-md-1 col-form-label text-md-end">{{ __('Etat') }}</label> 
                            <div class="col-md-3">
                                <select name="etat">
                                    <option  selected disabled>Etat</option>
                                    <option value="attente">Attente</option>
                                    <option value="Encours">En cours</option>
                                    <option value="Réparaé">Réparé</option>
                                </select>
                            </div>
                        </div>                      

                        <div class="row mb-0">
                            <div class="col-md-3 offset-md-2">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Enregister') }}
                                </button>
                            </div>
                            
                            <div class="col-md-3 offset-md-4">
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