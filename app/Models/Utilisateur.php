<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    protected $fillable = ['nom', 'email', 'mot_de_passe'];

    public function produits()
    {
        return $this->belongsToMany(Produit::class, 'ordres')->withPivot('quantite');
    }
}
