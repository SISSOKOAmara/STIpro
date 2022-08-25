@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Ajouter à réparer') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('reparationregister') }}">
                        @csrf
                        
                  

                        <div class="row mb-3">
                            <label for="categorie" class="col-md-4 col-form-label text-md-end">{{ __('categorie') }}</label>

                            <div class="col-md-6">
                                <input id="categorie" type="text" class="form-control" name="categorie" value="" required autocomplete="categorie" autofocus>
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
                                <input id="model" type="text" class="form-control" name="model" value="" required autocomplete="model" autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="motif" class="col-md-4 col-form-label text-md-end">{{ __('motif') }}</label>

                            <div class="col-md-6">
                                <input id="motif" type="text" class="form-control" name="motif" value="" required autocomplete="motif" autofocus>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="etat" class="col-md-4 col-form-label text-md-end">{{ __('etat') }}</label>

                            <div class="col-md-6">
                                <input id="etat" type="text" class="form-control" name="etat" value="" required autocomplete="etat" autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="note" class="col-md-4 col-form-label text-md-end">{{ __('note') }}</label>

                            <div class="col-md-6">
                                <input id="note" type="text" class="form-control" name="note" value="" required autocomplete="etat" autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="commentaire" class="col-md-4 col-form-label text-md-end">{{ __('commentaire') }}</label>

                            <div class="col-md-6">
                                <input id="commentaire" type="text" class="form-control" name="commentaire" value="" required autocomplete="commentaire" autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="panne" class="col-md-4 col-form-label text-md-end">{{ __('panne') }}</label>

                            <div class="col-md-6">
                                <input id="panne" type="text" class="form-control" name="panne" value="" required autocomplete="panne" autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="prix" class="col-md-4 col-form-label text-md-end">{{ __('prix') }}</label>

                            <div class="col-md-6">
                                <input id="prix" type="decimale" class="form-control" name="prix" value="" required autocomplete="prix" autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="paye" class="col-md-4 col-form-label text-md-end">{{ __('paye') }}</label>

                            <div class="col-md-6">
                                <input id="paye" type="decimale" class="form-control" name="paye" value="" required autocomplete="paye" autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="restant" class="col-md-4 col-form-label text-md-end">{{ __('restant') }}</label>

                            <div class="col-md-6">
                                <input id="restant" type="decimale" class="form-control" name="restant" value="" autocomplete="restant" autofocus>
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label for="date_retrait" class="col-md-4 col-form-label text-md-end">{{ __('date retrait') }}</label>

                            <div class="col-md-6">
                                <input id="date_retrait" type="date" class="form-control" name="date_retrait" >
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="client" class="col-md-4 col-form-label text-md-end">{{ __('Client') }}</label>

                            <div class="col-md-6">
                                <input id="client" type="integer" class="form-control" name="client" >
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="remarque" class="col-md-4 col-form-label text-md-end">{{ __('remarque') }}</label>

                            <div class="col-md-6">
                                <input id="remarque" type="text" class="" name="remarque" value="" required autocomplete="remarque">

                               
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