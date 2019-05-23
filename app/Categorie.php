<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    public function recettes()
    {
        return $this->belongsToMany(Recette::class);
    }
}
