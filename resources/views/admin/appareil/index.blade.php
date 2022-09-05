@extends('layouts.Master')

@section('content')


<div class="table-responsive">
  <table class="table">
    <thead>
      
      <tr>
        <th scope="col"><input type="checkbox" id="fieldsForm_checkall" class="checkall_box" title="Tout cocher"></th>
    
        <th scope="col">categorie </th>
        <th scope="col">Marque</th>
        <th scope="col">Model</th>
        <th scope="col">Motif</th>
        <th scope="col">Note</th>
        <th scope="col">Etat</th>
        <th scope="col">Action</th>
      </tr>
      <tr>
            
    </thead>
    <tbody>
    @foreach($categories as $categorie ) 
        <tr>
        <td>
              <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                  <label class="custom-control-label" for="customCheck1"></label>
              </div>
            </td>
        
            <td>{{$categorie->nom}}</td>
            <td>{{$categorie->Reparations}}</td>
            <td>{{$categorie->produits}}</td>
            <td>{{$categorie->motif}}</td>
            <td>{{$categorie->note}}</td>
            <td>{{$categorie->etat}}</td>
            <td>
              <a href="" class="btn btn-primary">Modifier</a>
              <a href="" class="btn btn-info">Detail</a>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>


@endsection