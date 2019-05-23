<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etape extends Model
{
    public function recette()
    {
        return $this->belongsTo(Recette::class, 'recette_id');
    }
}
