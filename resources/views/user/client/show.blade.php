@extends('layouts.Master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-black text-center">{{ __('Detail') }}</div>

                <div class="card-body text-black">

                       <h3>Nom: {{$client->nom}}</h3> 
                       <h3>Numéro: {{$client->numero}}</h3>
                        
                        <h3>Adress: {{$client->adresse}}<h3>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection