<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class taches extends Model
{
    use HasFactory;
    protected $fillable= [
        'Lieu',
        'designation',
        'Etat',
        'delai',
        'user_id',
        'reparation_id',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
    public function reparation(){
        return $this->belongsTo(Reparations::class, 'reparation_id');
    }
}
