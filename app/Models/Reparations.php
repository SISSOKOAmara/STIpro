<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reparations extends Model
{
    use HasFactory;

    protected $fillable = [
        'categorie',
        'marque',
        'model',
        'motif',
        'etat',
        'note',
        'panne',
        'prix',
        'paye',
        'restant',
        'rdv',
        'date_retrait',
        'remarque',
        'appareil',
        'client'
    ];

    public function appareils(){
        return $this->belongsTo(appareils::class, 'appareil');
    }

    public function client(){
        return $this->belongsTo(Clients::class, 'client');
    }
}
