<!DOCTYPE html>
<html lang="en">
     <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Sage Tech Informatique</title>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- <link rel="stylesheet"href ="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> 
        <link rel="stylesheet"href="https://cdn.datatables.net/1.10.12/css /dataTables.bootstrap.min.css"> -->
   </head>
  <body>

            <div class="container-scroller">
                    <table class="datatable" id="datatable">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">Nom</th>
                                <th class="text-center">Numero</th>
                                <th class="text-center">Adresse</th>
                            </tr>
                        </thead>
                            <tbody> 
                                @foreach($data as $item) 
                                    <tr class="item{{$item->id}}"> 
                                    <td>{{$item->id}}</td> 
                                    <td>{{ $item->nom}}</td> 
                                    <td>{{$item->numero}}</td> 
                                    <td>{{$item->adresse}}</td> 
                                    <td><button class="edit -modal btn btn-info" 
                                            data-info="{{$item->id}},{{$item->nom}},{{$item->numero}},{{$item->adresse}}"> 
                                            <span class="glyphicon glyphicon-edit"></span> Modifier 
                                        </button> 
                                        <button class="delete-modal btn btn-danger"
                                            data-info="{{$item->id}},{{$item->nom}},{{$item->numero}},{{$item->adresse}}"> 
                                            <span class="glyphicon glyphicon-trash"></span> Supprimer 
                                        </button></td> 
                                </tr> 
                                @endforeach 
                            </tbody>
                            <script type="text/javascript"> 
        $(document).ready(function() { 
           var table= $('#datatable').DataTable(); 
        } ); 
        </script>
                    </table>


        
            </div>
   
        

        <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
        <!-- <script src="//code.jquery.com/jquery-1.12.3.js"></script> 
        <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min .js"></script> 
        <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  -->


        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>