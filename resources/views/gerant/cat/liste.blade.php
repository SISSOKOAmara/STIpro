@extends('layouts.Master')

@section('content')

<div class="p-3 bg-body rounded shadow-sm d-block" >
  <h6 class="text-black text-center" >Liste des categories</h6>
<!-- boutton ajouter -->
    <!-- <li class=""> -->
                <a class="nav-link" data-toggle="collapse" href="#catAjout" aria-expanded="false" aria-controls="ui-basic">
                  <span class="menu-icon">
                    <!-- <i class="mdi mdi-laptop"></i> -->
                    <i class="mdi mdi-plus-circle"></i>
                  </span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="catAjout">
                  <form method="POST" action="{{ route('cat.store3') }}" >
                  @csrf

                  <div class="row mb-3">
                    <div class="col-md-4">
                      <input  type="text" placeholder="Libelle" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ old('nom') }}" required autocomplete="nom" autofocus>
                      @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                    </div>
                      <div class="col md-1">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Ajouter') }}
                                    </button>
                      </div>
                      </div>
                  </form>
                </div>

    <!-- </li> -->

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
       <th scope="col">#</th>
        <th scope="col">Categorie</th>
        <th scope="col">Action</th>
      </tr>
      <tr>
            
    </thead>
    <tbody>
    @foreach($categories as $categorie)
        <tr>
            <td>{{$categorie->id}}</td>
            <td>{{$categorie->nom}}</td>
          <td>
            <a href="" class="mdi mdi-pencil"></a>
            <a href=""  class="mdi mdi-delete"></a>
          </td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>
<!-- fin tableau -->
</div>

@endsection