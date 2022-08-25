<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appareils extends Model
{
    use HasFactory;

    protected $fillable=[
        'categorie',
        'marque',
        'model',
        'motif',
        'etat',
        'note'
    ];

    public function clients(){
        return $this->belongsTo(clients::class, 'client');
    }

    public function reparations(){
        return $this->hasMany(reparations::class, 'appareil');
    }

    // public function stocks(){
    //     return $this->hasMany(stocks::class, 'appareil');
    // }
}
