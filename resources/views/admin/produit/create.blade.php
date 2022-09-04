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
            <div class="card text-black" style="background-image:url('/assetss/images/stiLogo.jpg');">
                <div class="card-header text-center">{{ __('Ajouter produit') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('produit.register') }}">
                        @csrf
                        
                        <div class="row mb-3">
                            <label for="categorie" class="col-md-4 col-form-label text-md-end">{{ __('categorie') }}</label>
                            <div class="col-md-6" >
                                <select  name="categorie">
                                <option selected disabled>Categorie</option>
                                    <option value="Portable">Portable</option>
                                    <option value="Bureautique">Bureautique</option>
                                    <option value="Projecteur">Projecteur</option>
                                    <option value="Caméra">Caméra</option>
                                    <option value="Réseau">Réseau</option>
                                    <option value="Chargeur">Chargeur</option>
                                    <option value="Câble">Câble</option>
                                    <option value="Accessoire">Accessoire</option>
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
                            <label for="etat" class="col-md-4 col-form-label text-md-end">{{ __('etat') }}</label>

                                <select id="etat" type="text" name="etat" required>
                                <option selected disabled>ETAT</option>
                                    <option value="Neuf">Neuf</option>
                                    <option value="Occasion">Occasion</option>
                                </select>
                        </div>

                            <div class="row mb-3">
                            <label for="note" class="col-md-4 col-form-label text-md-end">{{ __('Note') }}</label>

                            <div class="col-md-6">
                                <input id="note" type="text" class="form-control" name="note" value="" autocomplete="note" autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="quantite" class="col-md-4 col-form-label text-md-end">{{ __('Quantite') }}</label>

                            <div class="col-md-6">
                                <input id="quantite" type="decimale" class="form-control" name="quantite" value="" required autocomplete="quantite" autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="prix_achat" class="col-md-4 col-form-label text-md-end">{{ __('prix_achat') }}</label>

                            <div class="col-md-6">
                                <input id="prix_achat" type="decimal" class="form-control" name="prix_achat" value="" required autocomplete="commentaire" autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="prix_vente" class="col-md-4 col-form-label text-md-end">{{ __('prix_vente') }}</label>

                            <div class="col-md-6">
                                <input id="prix_vente" type="decimale" class="form-control" name="prix_vente" value="" required autocomplete="prix_vente" autofocus>
                            </div>
                        </div>
      
                        <div class="row mb-3">
                            <label for="date_achat" class="col-md-4 col-form-label text-md-end">{{ __('date_achat') }}</label>

                            <div class="col-md-6">
                                <input id="date_achat" type="date" class="form-control" name="date_achat" value="" >
                            </div>
                        </div>                     

                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label text-md-end">{{ __('Fournisseur') }}</label>
                            <div class="col-md-6">
                            <select name="fournisseur_id" >
                                <option selected disabled>Fournisseur</option>
                                 @foreach($fournisseur as $fournisseurs)
                                <option value="{{$fournisseurs->id}}">{{$fournisseurs->nom}} - {{$fournisseurs->numero}}</option>
                                  @endforeach
                            </select>
                            </div>
                        </div>
                            

                          <!-- Hiden -->
                                <input id="user_id" type="integer"  class="form-control" name="user_id" value="{{Auth::user()->id}}" autofocus>
                                <input id="motif" hidden type="text"  class="form-control" name="motif" value="Vente" autofocus>
                            <!-- fin hiden -->

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
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