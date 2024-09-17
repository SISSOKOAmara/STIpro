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
                              {{--  --}}
                                                            
                              <div class="row mb-1">
                                <div class="col-md-6 col-sm-6 text-center">
                                              
                                <i class="mdi mdi-account"></i>
                                {{-- debut --}}
                                <select name="client_id" >
                                                
                                  {{-- <option value="{{$repairedit->client_id}}">{{$repairedit->client->nom}}</option> --}}
                                  <option value="{{$repairedit->client_id}}">{{$repairedit->client->nom}}</option>
                                  <hr>
                                  @foreach($clients as $clien)
                                  <option value="{{$clien->id}}">{{$clien->nom}}</option>
                                    @endforeach
                              </select>
                              {{-- <input type="text" name="model" class="col-md-4" value="{{$repairedit->numero}}"> --}}
                                {{-- fin --}}

                                {{-- {{$repairedit->client->nom}} --}}
                                          
                                </div>
                                <div class="col-md-6 text-center">
                                  <i class="mdi mdi-phone"></i>
                                  {{$repairedit->client->numero}}

                                </div>
                              </div>
                              <hr>

                                  <div class="row bg-primary text-white">
                                    <div class="col-md-12 text-center">     
                                        {{$repairedit->categorie->nom}} - {{$repairedit->marque}}-{{$repairedit->model}}
                                    </div>
                                  </div>
                                  <hr>


                              {{--  --}}
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
                                                  <input type="decimal" id="prix" maxlength="7" name="prix"  value="{{$repairedit->prix}}">
                                            </div>

                                            <div class="row mb-1">
                                            <label class="col-md-4 col-form-label text-right">{{ __('Paye') }}</label>
                                                <input type="decimal" id="paye" maxlength="7" name="paye"  value="{{$repairedit->paye}}">
                                            </div>
                                            <div class="row mb-1">
                                            <label class="col-md-4 col-form-label text-right">{{ __('RDV') }}</label>
                                              <input type="date" name="rdv"  value="{{$repairedit->rdv}}">
                                            </div>
                                            <div class="row mb-1">
                                              <label class="col-md-4 col-form-label text-right">{{ __('Date Récup.') }}</label>
                                                <input type="date" name="Date_retrait"  value="{{$repairedit->date_retrait}}">
                                              </div>

                                            <div class="row mb-1">
                                            <label class="col-md-4 col-form-label text-right">{{ __('Remarque') }}</label>
                                                <input type="text" name="remarque"  value="{{$repairedit->remarque}}">
                                            </div>
                                          <div class="row mb-1">
                                                    <label for="etat" class="col-md-4 col-form-label text-right">{{ __('Etat') }}</label> 
                                                
                                                    <select name="etat" >
                                                        <option value="{{$repairedit->etat}}">{{$repairedit->etat}}</option>
                                                        <hr>
                                                        <option value="attente">Attente</option>
                                                        <option value="En cours">En cours</option>
                                                        <option value="Réparé">Réparé</option>
                                                        <option value="Récuperé">Récuperé</option>
                                                        <option value="Annulé">Annulé</option>
                                                    </select>
                                          </div> 
                                          
                                          <div class="row mb-3">
                                            <label for="note" class="col-md-4 col-form-label text-right">{{ __('Note') }}</label>
                                            <input type="text" name="note"  value="{{$repairedit->note}}">
                                          </div>

                                          
                                          <div class="row mb-1">
                                            <div class="col-md-1 offset-md-4 mt-1">
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('Modifier') }}
                                                </button>
                                            </div>
                                            
                                            <div class="col-md-1 offset-md-1 mt-1">
                                                <button a href="{{ route('reparationIndex') }}" class="btn btn-primary" class="btn btn-warning">
                                                    {{ __('Annuler') }}
                                                </button>
                                            </div>
                                        </div>
                                        {{-- script --}}
                                        <script>
                                          var nombre = document.getElementById('prix');
                                          nombre.addEventListener('keypress', function(e){
                                               if (e.charCode < 48 || e.charCode > 57) {
                                                   e.preventDefault();
                                                   }
                                                  });
                                       </script>

                                      <script>
                                        var nombre = document.getElementById('paye');
                                        nombre.addEventListener('keypress', function(e){
                                            if (e.charCode < 48 || e.charCode > 57) {
                                                e.preventDefault();
                                                }
                                                });
                                      </script>

                                        {{-- end script --}}
                    </form>
                 </div>
              </div>
          </div>
        </div>
  </div>

@endsection