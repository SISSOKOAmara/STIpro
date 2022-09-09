@extends('layouts.Master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="background-image:url('/assetss/images/stiLogo.jpg');">
                <div class="card-header text-black text-center">{{ __('Detail') }}</div>

                <div class="card-body text-black">

                        {{$client->nom}}
                        {{$client->numero}}
                        {{$client->adresse}}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection