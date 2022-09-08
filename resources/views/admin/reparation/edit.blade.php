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
<form action="{{route('reparation.update' ,$repairedit->id)}}" method="POST">
@csrf
@method('PATCH')
<input type="text" name="model"  value="{{$repairedit->model}}">
<input type="text" name="panne"  value="{{$repairedit->panne}}">
<input type="decimal" name="prix"  value="{{$repairedit->prix}}">
<input type="decimal" name="paye"  value="{{$repairedit->paye}}">
<input type="date" name="rdv"  value="{{$repairedit->rdv}}">
<input type="text" name="remarque"  value="{{$repairedit->remarque}}">
<div class="row mb-2">
       <label for="etat" class="col-md-1 col-form-label text-md-end">{{ __('Etat') }}</label> 
              <div class="col-md-3">
                                <select name="etat" >
                                    <option value="attente">Attente</option>
                                    <option value="En cours">En cours</option>
                                    <option value="Répararé">Réparé</option>
                                </select>
                            </div>
                        </div>    
<input type="text" name="note" placeholder="note" value="{{$repairedit->note}}">
<input type="submit" name="" value="Modifier">
</form>
@endsection