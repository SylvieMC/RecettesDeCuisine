<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recette extends Model
{
    public function categories()
    {
        return $this->belongsToMany(Categorie::class);
    }

    public function utilisateur()
    {
        return $this->belongsTo(Utilisateur::class, 'utilisateur_id');
    }

    public function etapes()
    {
        return $this->hasMany(Etape::class, 'recette_id');
    }

    public function ingredients()
    {
        return $this->belongsToMany(Ingredient::class)->using(IngredientRecette::class);
    }
}
