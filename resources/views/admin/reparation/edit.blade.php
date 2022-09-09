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
      <div class="row justify-content-center text-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header text-center">{{ __('Modifier appareil') }}</div>

                  <div class="card-body text-black text-center">

                    <form action="{{route('reparation.update' ,$repairedit->id)}}" method="POST" class="text-black">
                              @csrf
                              @method('PATCH')

                                        <div class="row mb-1">
                                                <label class="col-md-4 col-form-label text-right">{{ __('Categorie') }}</label>
                                                
                                                <select name="categorie_id" >
                                                
                                                    <option value="{{$repairedit->categorie_id}}">{{$repairedit->categorie->nom}}</option>

                                                    @foreach($categories as $categorie)
                                                    <option value="{{$categorie->id}}">{{$categorie->nom}}</option>
                                                      @endforeach
                                                </select>
                                               
                                          </div>

                                          <div class="row mb-1">
                                                <label class="col-md-4 col-form-label text-right">{{ __('Model') }}</label>
                                                <input type="text" name="model" class="col-md-4" value="{{$repairedit->model}}">
                                          </div>
                                          <div class="row mb-1">
                                            <label class="col-md-4 col-form-label text-right">{{ __('Panne') }}</label>
                                            <input type="text" name="panne"  value="{{$repairedit->panne}}">
                                          </div>
                                            <div class="row mb-1">
                                            <label class="col-md-4 col-form-label text-right">{{ __('Prix') }}</label>
                                                  <input type="decimal" name="prix"  value="{{$repairedit->prix}}">
                                            </div>

                                            <div class="row mb-1">
                                            <label class="col-md-4 col-form-label text-right">{{ __('Paye') }}</label>
                                                <input type="decimal" name="paye"  value="{{$repairedit->paye}}">
                                            </div>
                                            <div class="row mb-1">
                                            <label class="col-md-4 col-form-label text-right">{{ __('RDV') }}</label>
                                              <input type="date" name="rdv"  value="{{$repairedit->rdv}}">
                                            </div>

                                            <div class="row mb-1">
                                            <label class="col-md-4 col-form-label text-right">{{ __('Remarque') }}</label>
                                                <input type="text" name="remarque"  value="{{$repairedit->remarque}}">
                                            </div>
                                          <div class="row mb-1">
                                                    <label for="etat" class="col-md-4 col-form-label text-right">{{ __('Etat') }}</label> 
                                                
                                                    <select name="etat" >
                                                        <option value="attente">Attente</option>
                                                        <option value="En cours">En cours</option>
                                                        <option value="Répararé">Réparé</option>
                                                    </select>
                                          </div> 
                                          
                                          <div class="row mb-3">
                                            <label for="note" class="col-md-4 col-form-label text-right">{{ __('Note') }}</label>
                                            <input type="text" name="note"  value="{{$repairedit->note}}">
                                          </div>

                                          
                                          <div class="row mb-1">
                                            <div class="col-md-1 offset-md-4">
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('Modifier') }}
                                                </button>
                                            </div>
                                            
                                            <div class="col-md-1 offset-md-1">
                                                <button a href="{{ route('reparationIndex') }}" class="btn btn-primary" class="btn btn-warning">
                                                    {{ __('Annuler') }}
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