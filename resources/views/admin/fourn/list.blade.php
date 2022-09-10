@extends('layouts.Master')

@section('content')
<div class="container">
<!-- boutton ajouter -->

    <div class="">
                <a class="Bplus" data-toggle="collapse" href="#fourni" aria-expanded="false" aria-controls="ui-basic" >
                  <span class="">
                    <!-- <i class="mdi mdi-laptop"></i> -->
                    <i class="mdi mdi-plus-circle"style="width:50% ;"></i>
                  </span>
                  <i class="menu-arrow"></i>
                </a>
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
                <div class="collapse" id="fourni">
                  <form method="POST" action="{{route('fournisseur.store')}}" >
                  @csrf

                  <div class="row mb-3">
                    <div class="col-md-3">
                      <input  type="text" placeholder="Nom" class="form-control @error('nom') is-invalid @enderror" name="nom" value="" required autocomplete="nom" autofocus>
                     
                    </div>
                    <div class="col-md-3">
                      <input  type="integer" placeholder="numéro" class="form-control" name="numero" value="" required autocomplete="numero" autofocus>
                     
                    </div>
                    <div class="col-md-3">
                      <input  type="text" placeholder="Adresse" class="form-control @error('adresse') is-invalid @enderror" name="adresse" value="" required autocomplete="adresse" autofocus>
                   
                    </div>
                      <div class="col md-1">
                                    <button type="submit" class="btn-primary">
                                      <i class="mdi mdi-plus-circle"></i>
                                    </button>
                      </div>
                      </div>
                  </form>
                </div>

    </div>
<!-- alert -->
@if(session()->has("successDelete"))
         <div class="alert alert-success">
            {{session()->get('successDelete')}}
          </div>
     @endif
     <!-- fin alert -->

     <!-- debut tableau -->
<div class="table-responsive">
  <table class="table text-center ">
    <thead>
      <tr>
        <th scope="col">Nom</th>
        <th scope="col">Numéro</th>
        <th scope="col">Adresse</th>
        <th scope="col">Action</th>
      </tr>
      <tr>
            
    </thead>
    <tbody>
    @foreach($fournisseurs as $fournisseur)
        <tr>
        <!-- <td>
              <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                  <label class="custom-control-label" for="customCheck1"></label>
              </div>
        </td> -->
            <td>{{$fournisseur->nom}}</td>
            <td>{{$fournisseur->numero}}</td>
            <td>{{$fournisseur->adresse}}</td>
          <td>
            <a href="{{route('reparationajoutA', $fournisseur->id)}}" class="btn btn-success"><i class="mdi mdi-plus-circle"></i></a>
            <a href="" class="btn btn-primary"><i class="mdi mdi-pencil"></i></a>
            <!-- <a href="{{route('client.detail',$fournisseur->id)}}"  class="btn btn-warning">Detail</a> -->
          </td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>
<!-- fin tableau -->
</div>

@endsection