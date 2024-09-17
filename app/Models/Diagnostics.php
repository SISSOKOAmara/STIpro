<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diagnostics extends Model
{
    use HasFactory;
    protected $fillable =[
        'nom',
        'etat',
        'prix',
        'paye',
       'reparation_id',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
    public function reparation(){
        return $this->belongsTo(Reparations::class, 'reparation_id');
    }
}