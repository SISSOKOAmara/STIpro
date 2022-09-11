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
        <div class="col-md-8">
            <div class="card text-black">
            <!-- <div class="card text-black" style="background-image:url('/assetss/images/stiLogo.jpg');"> -->
                <div class="card-header text-center">{{ __('Ajouter produit') }}</div>

                <div class="card-body">
                <form action="{{route('produit.update' ,$produitedit->id)}}" method="POST" class="text-black">
                              @csrf
                              @method('PATCH')

                        <div class="row mb-1">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('Appareil') }}</label>
                            <select name="reparation_id" style="margin-left: 10px">
                                 @foreach($reparation as $reparations)
                                <option value="{{$reparations->id}}">{{$reparations->client->nom}} -{{$reparations->categorie->nom}}-{{$reparations->marque}}-{{$reparations->panne}}</option>
                                  @endforeach
                            </select>
                        </div>

                        <div class="row mb-1">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('Categorie') }}</label>
                            <select name="categorie_id" style="margin-left: 10px">
                                 @foreach($categories as $categorie)
                                <option value="{{$categorie->id}}">{{$categorie->nom}}</option>
                                  @endforeach
                            </select>
                        </div>
           
                        <div class="row mb-1">
                            <label for="marque" class="col-md-4 col-form-label text-md-right">{{ __('marque') }}</label>
                            <div class="col-md-6">
                                <input id="marque" type="text" class="form-control" name="marque" value="{{$produitedit->marque}}" required autocomplete="categorie" autofocus>
                            </div>
                        </div>
                       
                        <div class="row mb-1">
                            <label for="model" class="col-md-4 col-form-label text-md-right">{{ __('model') }}</label>

                            <div class="col-md-6">
                                <input id="model" type="text" class="form-control" name="model" value="{{$produitedit->model}}" autocomplete="model" autofocus>
                            </div>
                        </div>

                        <div class="row mb-1">
                            <label for="etat" class="col-md-4 col-form-label text-md-right">{{ __('etat') }}</label>

                                <select id="etat" type="text" name="etat" required style="margin-left: 10px">
                                <option selected disabled>ETAT</option>
                                    <option value="Neuf">Neuf</option>
                                    <option value="Occasion">Occasion</option>
                                </select>
                        </div>


                            <div class="row mb-1">
                            <label for="note" class="col-md-4 col-form-label text-md-right">{{ __('Note') }}</label>

                            <div class="col-md-6">
                                <input id="note" type="text" class="form-control" name="note" value="{{$produitedit->note}}" autocomplete="note" autofocus>
                            </div>
                            </div>
                        

                        <div class="row mb-1">
                            <label for="quantite" class="col-md-4 col-form-label text-md-right">{{ __('Quantite') }}</label>

                            <div class="col-md-6">
                                <input id="quantite" type="decimale" class="form-control" name="quantite" value="{{$produitedit->quantite}}" required autocomplete="quantite" autofocus>
                            </div>
                        </div>

                        
                
                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('Fournisseur') }}</label>
                            <select name="fournisseur_id" style="margin-left: 10px">
                                <option selected disabled>Fournisseur</option>
                                 @foreach($fournisseur as $fournisseurs)
                                <option value="{{$fournisseurs->id}}">{{$fournisseurs->nom}} - {{$fournisseurs->numero}}</option>
                                  @endforeach
                            </select>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-3"></div>
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Ajouter') }}
                                </button>
                            </div>
                        
                            <div class="col-md-3 offset-md-4">
                                <a href="{{ route('produit') }}" class="btn btn-danger"> 
                                    {{ __('annuler') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection