<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recette extends Model
{
    protected $table = 'recettes';

    protected $fillable = [
        "nom",
        "description",
        "temps_preparation",
        "nombre_portion"
    ];

    public function categories()
    {
        return $this->belongsToMany(Categorie::class);
    }

    public function utilisateur()
    {
        return $this->belongsTo(Utilisateur::class, 'id');
    }

    public function etapes()
    {
        return $this->hasMany(Etape::class, 'id');
    }

    public function ingredients()
    {
        return $this->belongsToMany(Ingredient::class)->using(IngredientRecette::class);
    }
}
