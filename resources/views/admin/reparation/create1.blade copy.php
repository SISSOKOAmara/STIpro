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
            <div class="">
                <div class="card-header  bg-primary">{{ __('Ajouter un Appareil à la Maintenance') }}</div>
            </div>
             <!-- <div class="my-3 p-3 bg-body rounded shadow-sm d-block text-center" style="width: 50% ;margin-left:25%"> -->
        </div>
    <div class="row">
       
    
   </div>
        </div>


                <div class="card-body bg-white">
                    <form method="POST" action="{{ route('reparationregister3', $clients->id) }}">
                        @csrf


                        @foreach($clients as $client)

                        <div class="row mb-3">
                            <label for="client" class="col-md-4 col-form-label text-md-end">{{ __('client') }}</label>
                                
                            <div class="col-md-6">
                                <input id="client" type="integer"  class="form-control" name="client" value="{{($client->id)}}" required autocomplete="categorie" autofocus>
                            </div>
                        </div>
                         @endforeach

                         <div class="row mb-3">
                            <label for="user" class="col-md-4 col-form-label text-md-end">{{ __('User') }}</label>

                            <div class="col-md-6">
                                <input id="user" type="integer"  class="form-control" name="user" value="{{ Auth::user()->id }}" required  autofocus>
                            </div>
                        </div>
                        
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
                                <input id="model" type="text" class="form-control" name="model" value="" autocomplete="model" autofocus>
                            </div>
                        </div>

                        
                                <!-- Motif -->
                            <div class="col-md-6">
                                <input id="motif" type="text" hidden class="form-control" name="motif" value="réparation" autocomplete="motif" autofocus>
                            </div>
                                <!-- fin motif -->
                        <div class="row mb-3">
                            <label for="etat" class="col-md-4 col-form-label text-md-end">{{ __('etat') }}</label>

                            <div class="col-md-6">
                                <input id="etat" type="text" class="form-control" name="etat" value="" autocomplete="etat" autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="note" class="col-md-4 col-form-label text-md-end">{{ __('note') }}</label>

                            <div class="col-md-6">
                                <input id="note" type="text" class="form-control" name="note" value=""  autocomplete="etat" autofocus>
                            </div>
                        </div>

        

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
                            <label for="restant" class="col-md-4 col-form-label text-md-end">{{ __('restant') }}</label>

                            <div class="col-md-6">
                                <input id="restant" type="decimale" class="form-control" name="restant" value="" autocomplete="restant" autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="rdv" class="col-md-4 col-form-label text-md-end">{{ __('date retrait') }}</label>

                            <div class="col-md-6">
                                <input id="rdv" type="date" class="form-control" name="rdv" >
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label for="date_retrait" class="col-md-4 col-form-label text-md-end">{{ __('date retrait') }}</label>

                            <div class="col-md-6">
                                <input id="date_retrait" type="date" class="form-control" name="date_retrait" >
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="remarque" class="col-md-4 col-form-label text-md-end">{{ __('commentaire') }}</label>

                            <div class="col-md-6">
                                <input id="remarque" type="text" class="form-control" name="remarque" value="" autocomplete="commentaire" autofocus>
                            </div>
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