<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    public function avatar()
    {
        return $this->hasOne(Avatar::class, 'avatar_id');
    }

    public function recettes()
    {
        return $this->hasMany(Recette::class);
    }
}
