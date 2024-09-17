@extends('layouts.Slave')

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
                <div class="card-header text-center text-white" style="background-color:#0201FD">{{ __('Modifier appareil') }}</div>

                  <div class="card-body text-black text-center">

                    <form action="{{route('reparation.update2' ,$repairedit->id)}}" method="POST" class="text-black">
                              @csrf
                              @method('PATCH')

                              <div class="row mb-1">
                                <div class="col-md-6 col-sm-6 text-center">
                                              
                                <i class="mdi mdi-account"></i>
                                {{$repairedit->client->nom}}
                                          
                                </div>
                                <div class="col-md-6 text-center">
                                  <i class="mdi mdi-phone"></i>
                                  {{$repairedit->client->numero}}
  
                                </div>
                              </div>
                              <hr>
  
                                  <div class="row text-white" style="background-color: #0201FD">
                                    <div class="col-md-12 text-center">     
                                        {{$repairedit->categorie->nom}} - {{$repairedit->marque}}-{{$repairedit->model}}
                                    </div>
                                  </div>
                                  <hr> 

                                        
                                          <div class="row mb-1">
                                            <label class="col-md-4 col-form-label text-right">{{ __('Panne') }}</label>
                                            <input type="text" name="panne"  value="{{$repairedit->panne}}">
                                          </div>

                                          <div class="row mb-1">
                                            <label class="col-md-4 col-form-label text-right">{{ __('Prix') }}</label>
                                                  <input type="decimal" maxlength="8" name="prix"  value="{{$repairedit->prix}}">
                                            </div>

                                            <div class="row mb-1">
                                            <label class="col-md-4 col-form-label text-right">{{ __('Paye') }}</label>
                                                <input type="decimal" maxlength="7" name="paye"  value="{{$repairedit->paye}}">
                                            </div>
                                            <div class="row mb-1">
                                            <label class="col-md-4 col-form-label text-right">{{ __('RDV') }}</label>
                                              <input type="date" name="rdv"  value="{{$repairedit->rdv}}">
                                            </div>

                                            <div class="row mb-1">
                                              <label class="col-md-4 col-form-label text-right">{{ __('Date Récup.') }}</label>
                                                <input type="date" name="date_retrait" value="{{$repairedit->date_retrait}}">
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
                                                <button type="submit" class="btn" style="background-color: #0201FD">
                                                    {{ __('Modifier') }}
                                                </button>
                                            </div>
                                            
                                            <div class="col-md-1 offset-md-1 mt-1">
                                                <button a href="{{ route('reparationIndex3') }}" class="btn" style="background-color: #FF6501">
                                                    {{ __('Annuler') }}
                                                </button>
                                            </div>
                                        </div>
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
                    </form>
                 </div>
              </div>
          </div>
        </div>
  </div>
  <script type="text/javascript">
    // Script JS pour afficher une alerte à l'ouverture de la page
    window.onload = function() {
        alert("NB: Il est desormais récomander de mettre la date de récuperation de l'appareil dès la récuperation. Merci");
    };
</script>
@endsection