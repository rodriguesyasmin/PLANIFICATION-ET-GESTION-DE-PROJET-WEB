<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    protected $fillable = ['titre', 'description', 'taille', 'photo', 'photo2', 'photo3', 'categorie', 'quantite'];

    public function utilisateurs()
    {
        return $this->belongsToMany(Utilisateur::class, 'ordres')->withPivot('quantite');
    }
}
