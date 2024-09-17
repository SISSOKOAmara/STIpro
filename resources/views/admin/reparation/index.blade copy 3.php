@extends('layouts.Master')

@section('content')
<div class="my-3 p-3 bg-body rounded shadow-sm d-block text-black "id="Fondinter">
  <h3 class="text-center">Liste de reparation</h3>
            <a href="{{ route('reparationajoutA') }}" class="btn btn-primary"><i class="mdi mdi-plus-circle"style="width:50% ;"></i></a>
            <!-- <i class="mdi mdi-wrench"></i> -->

            @if(session()->has("successDelete"))
                <div class="alert alert-succes">
                    {{session()->get('success')}}
                  </div>
              @endif
             
            <div class="table-responsive">
              <table id="datatablesSimple" class="table text-center font-size-13">
                <thead>
                  <tr>
                    <th scope="col">#</th>
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
                  
                  {{-- @foreach ( $reparat->maintenances as $repair)
                  <td>{{$repair->panne}}ici</td>
                @endforeach --}}
                  {{-- {{$piecedechange}} --}}
                @foreach($reparations as $reparation)
                
                  {{-- @foreach($reparation->maintenances as $tache) --}}

                    <tr>
                        <td><a href="{{route('panne.create',$reparation->id)}}" ><i class="mdi mdi-plus-circle"></i></a></td>
                        <td>{{$reparation->client->nom}}</td>
                        <td>{{$reparation->categorie->nom}}</td>
                        <td>{{$reparation->marque}}</td>

                        <td class="bg-primary" style="width: 100px" >
                             @foreach ($reparation->maintenances as $panne)
                                {{$panne->panne}} <br>
                              @endforeach
                              <hr>
                              @foreach($reparation->produits as $produit)
                                {{$produit->marque}}<br>
                              @endforeach
                        </td>

                        <td class="">{{$reparation->note}}</td>

                        <td class="bg-alert">
                          @foreach ($reparation->maintenances as $panne)
                             {{$panne->prix}}<br>
                           @endforeach
                           <hr>
                           @foreach($reparation->produits as $produit)
                                {{$produit->prix_vente}}<br>
                              @endforeach
                              <hr>
                              
                              <br>
                     </td>

                        {{-- <td>{{$maintenances->panne}}</td> --}}
                        {{-- <td>{{$reparation->maintenances}}</td> --}}
                       {{-- <td><h6>.{{$tache->panne}}</h6></td>    --}}

                        {{-- <td>{{$reparation()->maintenances->id}}</td> --}}
                        {{-- <td>{{$reparation->produits()->prix_vente}}</td> --}}
                        {{-- <td>{{$reparation->produits}}</td> --}}
                        {{-- <td>{{$piecedechange->prix_vente}}F</td> --}}
                        {{-- @foreach($reparations()->produits as $echange)
                        {{$echange->prix_vente}}
                        @endforeach --}}

                        <td>{{$reparation->rdv}}</td>
                        <td>{{$reparation->etat}}</td>
                        <td>
                          <a href="{{route('reparation.edit',$reparation->id)}}"  class="mdi mdi-border-color" id="Bplus"></a>
                          <a href="{{route('reparation.detail',$reparation->id)}}"  class=""><i class="mdi mdi-information-outline"></i></a>
                          <a href="{{route('reparation.facture',$reparation->id)}}"><i class="mdi mdi-file-document-box"></i></a>
                          
                          <a href="#"  onclick="if(confirm('Voulez vous vraiment supprimer cet appareil?')){document.getElementById('form-{{$reparation->id}}').submit() }"><i class="mdi mdi-delete"></i></a>
                            <form id="form-{{$reparation->id}}" action="{{route('reparation.supprimer',
                                ['reparation'=>$reparation->id])}}" method="post">
                                @csrf
                                <input type="hidden" name="_method" value="delete">
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
</div>
@endsection