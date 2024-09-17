@extends('layouts.gerant')

@section('content')
<div class="my-3 p-3 bg-body rounded shadow-sm d-block text-black "id="Fondinter">
  <h3 class="text-center">Liste des appareils réparés non récuperés</h3>
  <hr>
            <a href="{{ route('reparationajoutA') }}" class="btn btn-primary"><i class="mdi mdi-plus-circle"style="width:50% ;"></i></a>

            @if(session()->has("successDelete"))
                <div class="alert alert-succes">
                    {{session()->get('success')}}
                  </div>
              @endif
            <div class="table-responsive">
              <table id="datatablesSimple" class="table text-center font-size-13">
                <thead>
                  <tr>
                    <th scope="col">Client</th>
                    <th scope="col">categorie </th>
                    <th scope="col">Marque</th>
                    <th scope="col">Panne</th>
                    <th scope="col">Note</th>
                    <th scope="col">Prix</th>
                    <th scope="col">RDV</th>
                    <th scope="col">Etat</th>
                    <th scope="col">Action</th>
                  </tr>
                  <tr>
                        
                </thead>
                <tbody>
                @foreach($reparations as $reparation)
                    <tr>
                        <td>{{$reparation->client->nom}}</td>
                        <td>{{$reparation->categorie->nom}}</td>
                        <td>{{$reparation->marque}}</td>
                        <td>{{$reparation->panne}}</td>
                        <td>{{$reparation->note}}</td>
                        <td>{{$reparation->prix}}F</td>
                        <td>{{$reparation->rdv}}</td>
                        <td>{{$reparation->etat}}</td>
                        <td>
                                <a href="{{route('reparation.edit3',$reparation->id)}}"  class="mdi mdi-border-color" id="Bplus"></a>
                                <a href="{{route('reparation.detail3',$reparation->id)}}"  class=""><i class="mdi mdi-information-outline"></i></a>
                                <a href="{{route('reparation.facture3',$reparation->id)}}"><i class="mdi mdi-file-document-box"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
</div>
@endsection