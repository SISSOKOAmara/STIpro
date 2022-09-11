<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    use HasFactory;
   protected  $fillable=[
    'id',
    'nom',
    'numero',
    'adresse'
   ];

   public function appareils(){
    return $this->hasOne(appareils::class, 'client');
}

  public function Reparations(){
    return $this->hasOne(Reparations::class, 'client_id');
}
}
