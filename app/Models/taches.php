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
        'type',
        'user',
        'reparation',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user');
    }
    public function reparation(){
        return $this->belongsTo(Reparations::class, 'reparation');
    }
}
