@extends('layouts.Master')

@section('content')

          
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Ajouter Client') }}</div>

                <div class="card-body">
              <td>{{$reparadetail->client->nom}}</td>
                <td>{{$reparadetail->categorie}}</td>
                <td>{{$reparadetail->marque}}</td>
                <td>{{$reparadetail->panne}}</td>
                <td>{{$reparadetail->note}}</td>
                <td>{{$reparadetail->prix}}F</td>
                <td>{{$reparadetail->rdv}}F</td>
                <td>{{$reparadetail->etat}}</td>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection