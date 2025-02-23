<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'description', 'quantite', 'prix', 'categorie_id'];

    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }

    public function entrees()
    {
        return $this->hasMany(Entree::class);
    }

    public function sorties()
    {
        return $this->hasMany(Sortie::class);
    }  
}
