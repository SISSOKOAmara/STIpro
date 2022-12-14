<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fournisseurs extends Model
{
    use HasFactory;
    protected $fillable=[
        'nom',
        'adresse',
        'numero',
    ];
    
    public function produits(){
        return $this->hasMany(Produit::class, 'fournisseur_id');
    }
}
