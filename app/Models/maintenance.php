<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Reparations;


class maintenance extends Model
{
    use HasFactory;

    protected $fillable=[
        'panne',
        'etat',
        'prix',
        'paye',
       'reparation_id',
    ];

    public function Reparation(){
        return $this->belongsTo(Reparations::class, 'reparation_id');
    }
}