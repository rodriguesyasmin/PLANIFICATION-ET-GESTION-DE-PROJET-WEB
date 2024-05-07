<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ordre extends Model
{
    use HasFactory;

    protected $fillable = ['utilisateur_id', 'produit_id', 'quantite'];

    public function utilisateur()
    {
        return $this->belongsTo(Utilisateur::class);
    }

    public function produit()
    {
        return $this->belongsTo(Produit::class);
    }
}
