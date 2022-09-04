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
        'fournisseur_id',
        'user_id',
    ];

    public function fournisseur(){
        return $this->belongsTo(fournisseurs::class, 'fournisseur_id');
    }

    public function client(){
        return $this->belongsTo(Clients::class, 'client_id');
    }
    public function user(){
        return $this->belongsTo(Clients::class, 'user_id');
    }

}
