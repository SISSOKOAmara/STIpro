@extends('layouts.Slave')

  

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">{{ __('Appareils') }}</div>
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
        <!-- Card 2 -->
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">{{ __('Réparation') }}</div>
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
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">{{ __('Client') }}</div>
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
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">{{ __('Employés') }}</div>
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

<div class="container">

    <div class="row justify-content-center">

        <div class="col-md-8">

            <div class="card">

                <div class="card-header">{{ __('Dashboard') }}</div>

  

                <div class="card-body">

                    @if (session('status'))

                        <div class="alert alert-success" role="alert">

                            {{ session('status') }}

                        </div>

                    @endif

  

                    You are a User.

                </div>

            </div>

        </div>

    </div>

</div>

@endsection