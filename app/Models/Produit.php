<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;
    protected $fillable =[
        'categorie',
        'marque',
        'model',
        'motif',
        'etat',
        'quantite',
         'QtVendu',
        'QtRestant',
        'prix_achat',
        'prix_vente',
        'benefice',
        'date_achat',
        'date_vente',
        'remarque',
        'appareil',
        'fournisseur',
        'user',
    ];

    public function fournisseur(){
        return $this->belongsTo(fournisseurs::class, 'fournisseur');
    }

    public function client(){
        return $this->belongsTo(Clients::class, 'client');
    }
}
