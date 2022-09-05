<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;
    protected $fillable =[
        'nom',
    ];

    public function produits(){
        return $this->hasMany(Produit::class, 'categorie_id');
    }
    public function reparations(){
        return $this->hasMany(Reparations::class, 'categorie_id');
    }
}
