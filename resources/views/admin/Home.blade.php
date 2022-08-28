@extends('layouts.Master')

  

@section('content')

<div class="container">

    <div class="row justify-content-center">

        <div class="col-md-8">

            <div class="card">

                <div class="card-header">{{ __('Dashboard') }}</div>

  

                <div class="card-body">

                    You are a Admin User.

                </div>
                <!-- Link -->
                <a href="{{ route('appareilIndex') }}">Appareil</a>
                <a href="{{ route('reparationIndex') }}">Reparations</a>
                <a href="{{ route('clientIndex') }}">Client</a>
                

                <!-- Fin link -->

            </div>

        </div>

    </div>

</div>

@endsection