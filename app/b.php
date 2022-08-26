
// Route::get('/reparation', [App\Http\Controllers\ReparationsController::class, 'create'])->name('reparationRegist');
// Route::get('/reparation', [App\Http\Controllers\ReparationsController::class, 'create'])->name('reparationRegiste');


'categorie',
        'marque',      'model',        'motif',   'etat', 'note',  'panne',   'prix',
        'paye',   'restant', 'date_depot',  'date_retrait','remarque', 'appareil','client'


        $Reparations = Reparations::create( 
                        [ 
                            'appareil'=> $appareils->id,
                            'categorie'=>$request['categorie'],
                            'marque'=>$request['marque'],
                            'model'=>$request['model'],
                            'motif'=>'Réparation',
                            'etat'=>$request['etat'],
                            'note'=>$request['note'],
                            'panne'=>$request['panne'],
                            'prix'=>$request['prix'],
                            'paye'=>$request['paye'],
                            'restant'=>$request['restant'],
                            'date_retrait'=>$request['date_retrait'],
                            'remarque'=>$request['remarque'],
                            'client'=>$request['client'],                            
                             'commentaire'=>$request['commentaire'],


                             <div class="row mb-3">
                            <label for="client" class="col-md-4 col-form-label text-md-end">{{ __('Client') }}</label>

                            <div class="col-md-6">
                                <input id="client" type="integer" class="form-control" name="client" >
                            </div>
                        </div>



                        <tr class="marked table-active">
            <td class="text-center print_ignore">
                <input type="checkbox" class="checkall" name="selected_fld[]" value="created_at" id="checkbox_row_18">
            </td>
            <td class="text-right">18</td>
            <th class="nowrap">
                <label for="checkbox_row_18">
                                            created_at
                                        
                </label>
            </th>
            <td class="nowrap">
                <bdo dir="ltr" lang="en">
                    timestamp
                                    </bdo>
            </td>
            <td>
                        </td>
            <td class="column_attribute nowrap"> </td>
            <td>Oui</td>
            <td class="nowrap">
                                    <em>NULL</em>
                            </td>
                            <td>
                    
                </td>
                        <td class="nowrap"></td>
                            <td class="edit text-center print_ignore">
                    <a class="change_column_anchor ajax" href="index.php?route=/table/structure/change&amp;db=sage_tech&amp;table=stocks&amp;field=created_at&amp;change_column=1">
                      <span class="nowrap"><img src="themes/dot.gif" title="Modifier" alt="Modifier" class="icon ic_b_edit">&nbsp;Modifier</span>
                    </a>
                </td>
                <td class="drop text-center print_ignore">
                    <a class="drop_column_anchor ajax" href="index.php?route=/sql" data-post="db=sage_tech&amp;table=stocks&amp;sql_query=ALTER+TABLE+%60stocks%60+DROP+%60created_at%60%3B&amp;dropped_column=created_at&amp;purge=1&amp;message_to_show=La+colonne+created_at+a+%C3%A9t%C3%A9+supprim%C3%A9e.">
                      <span class="nowrap"><img src="themes/dot.gif" title="Supprimer" alt="Supprimer" class="icon ic_b_drop">&nbsp;Supprimer</span>
                    </a>
                </td>
            
                                            <td class="print_ignore">
                    <ul class="table-structure-actions resizable-menu">
                                                    <li class="submenu shown">
                                <a href="#" class="tab nowrap"><span class="nowrap"><img src="themes/dot.gif" title="Plus" alt="Plus" class="icon ic_b_more">&nbsp;Plus</span></a>
                                <ul>
                        
                        <li class="primary nowrap">
                                                      <a rel="samepage" class="ajax add_key print_ignore add_primary_key_anchor" href="index.php?route=/table/structure/add-key" data-post="db=sage_tech&amp;table=stocks&amp;sql_query=ALTER+TABLE+%60stocks%60+DROP+PRIMARY+KEY%2C+ADD+PRIMARY+KEY%28%60created_at%60%29%3B&amp;message_to_show=Une+cl%C3%A9+primaire+a+%C3%A9t%C3%A9+ajout%C3%A9e+sur+created_at.">
                              <span class="nowrap"><img src="themes/dot.gif" title="Primaire" alt="Primaire" class="icon ic_b_primary">&nbsp;Primaire</span>
                            </a>
                                                  </li>

                        <li class="add_unique unique nowrap">
                                                      <a rel="samepage" class="ajax add_key print_ignore add_unique_anchor" href="index.php?route=/table/structure/add-key" data-post="db=sage_tech&amp;table=stocks&amp;sql_query=ALTER+TABLE+%60stocks%60+ADD+UNIQUE%28%60created_at%60%29%3B&amp;message_to_show=Un+index+a+%C3%A9t%C3%A9+ajout%C3%A9+sur+created_at.">
                              <span class="nowrap"><img src="themes/dot.gif" title="Unique" alt="Unique" class="icon ic_b_unique">&nbsp;Unique</span>
                            </a>
                                                  </li>

                        <li class="add_index nowrap">
                                                      <a rel="samepage" class="ajax add_key print_ignore add_index_anchor" href="index.php?route=/table/structure/add-key" data-post="db=sage_tech&amp;table=stocks&amp;sql_query=ALTER+TABLE+%60stocks%60+ADD+INDEX%28%60created_at%60%29%3B&amp;message_to_show=Un+index+a+%C3%A9t%C3%A9+ajout%C3%A9+sur+created_at.">
                              <span class="nowrap"><img src="themes/dot.gif" title="Index" alt="Index" class="icon ic_b_index">&nbsp;Index</span>
                            </a>
                                                  </li>

                                                <li class="spatial nowrap">
                                                      <span class="nowrap"><img src="themes/dot.gif" title="Spatial" alt="Spatial" class="icon ic_bd_spatial">&nbsp;Spatial</span>
                                                  </li>

                                                <li class="fulltext nowrap">
                                                  <span class="nowrap"><img src="themes/dot.gif" title="Texte entier" alt="Texte entier" class="icon ic_bd_ftext">&nbsp;Texte entier</span>
                                                </li>

                                                <li class="browse nowrap">
                            <a href="index.php?route=/sql" data-post="db=sage_tech&amp;table=stocks&amp;sql_query=SELECT+COUNT%28%2A%29+AS+%60Lignes%60%2C+%60created_at%60+FROM+%60stocks%60+GROUP+BY+%60created_at%60+ORDER+BY+%60created_at%60&amp;is_browse_distinct=1">
                              <span class="nowrap"><img src="themes/dot.gif" title="Valeurs distinctes" alt="Valeurs distinctes" class="icon ic_b_browse">&nbsp;Valeurs distinctes</span>
                            </a>
                        </li>
                                                    <li class="browse nowrap">
                                                            <a href="#" class="central_columns add_button">
                                    <span class="nowrap"><img src="themes/dot.gif" title="Ajouter à la liste centrale" alt="Ajouter à la liste centrale" class="icon ic_centralColumns_add">&nbsp;Ajouter à la liste centrale</span>
                                </a>
                                                        </li>
                                                                                </ul>
                            </li>
                                            </ul>
                </td>
                    </tr>


                    <div  class ="col-md-10" style="margin-left:10%;">
                                <h6>client</h6>
                                <select class="form-control" name="client" id="client" type="integer">
                                @foreach($clients as $client)
                                <option value="{{$client->id}}" id="client" hideen type="integer" class="form-control" name="client">{{$client->nom}}</option>
                                @endforeach
                                </select>
                        </div>


                    /*You've to use the database model name from your App\Models folder at the top of
 your controller page*/
use App\Models\Postimage;

//Store image
    public function storeImage(Request $request){
        $data= new Postimage();

        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $data['image']= $filename;
        }
        $data->save();
        return redirect()->route('images.view');
       
    }

    'photo' => 'required','string', 'mimes:jpeg,png,jpg,gif|max:1000',


    
    $fileName = time().'.'.$request->photo->extension();  
                $request->photo->move(public_path('users/profil'), $fileName);

                
                'photo' => $fileName,

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                 Dropdouwn
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a>Lien 1</a>
                                    <a>Lien 2 </a>
                                </div>
                            </li>




                            {
        //
            $appar = $request->validate(
                [                    
                    'categorie'=>['required', 'string', 'max:30'],
                    'marque'=>['required', 'string', 'max:20'],
                    'model'=>['required', 'string', 'max:50'],
                    'motif'=>['required', 'string', 'max:20'],
                    'etat'=>['required', 'string', 'max:25'],
                    'note'=>['required', 'string', 'max:225'],        
                    'panne'=>['required', 'string', 'max:225'],        
                    'prix'=>['required', 'decimal', 'max:225'],        
                    'paye'=>['required', 'decimal', 'max:225'],        
                    'rdv'=>['required', 'date', 'max:225'],        
                    'date_retrait'=>['required', 'date', 'max:225'],        
                    'remarque'=>['required', 'string', 'max:225'],        
                    'client'=>['required', 'integer', 'max:225'],       
                ]
            );
            if ($appar)
            {
              
                    $Reparations = Reparations::create( 
                        [ 
                            'categorie'=>$request['categorie'],
                            'marque'=>$request['marque'],
                            'model'=>$request['model'],
                            'motif'=>'Réparation',
                            'etat'=>$request['etat'],
                            'note'=>$request['note'],
                            'panne'=>$request['panne'],
                            'prix'=>$request['prix'],
                            'paye'=>$request['paye'],
                            'rdv'=>$request['rdv'],
                            'date_retrait'=>$request['date_retrait'],
                            'remarque'=>$request['remarque'],
                            'client'=>$request['client'],
                        ]);
                        
                }
                return redirect('/admin/reparation/index');
             }

             select * from `users` where `id` = ? limit 1


             @forelse($posts as $post)
    <tr>
        <td> {{ $post->title }} </td>
        <td> {{ $post->body }} </td>
        <td> {{ $post->created_at }} </td>
    </tr>
@empty
    <tr>
        <td colspan="3"> No record found </td>
    </tr>
@endforelse