<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categories;

class Reparations extends Model
{
    use HasFactory;

    protected $fillable = [
        
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
        'remarque_id',
        'client_id',
        'user_id',
        'categorie_id',
    ];

    public function User(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function client(){
        return $this->belongsTo(Clients::class, 'client_id');
    }
    public function taches(){
        return $this->hasMany(taches::class, 'reparation_id');
    }
    public function categorie(){
        return $this->belongsTo(Categories::class, 'categorie_id');
    }
}
