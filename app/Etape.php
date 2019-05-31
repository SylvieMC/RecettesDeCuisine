<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etape extends Model
{
	protected $table = 'etapes';
	protected $fillable = ['numero','description','recette_id'];

    public function recette()
    {
        return $this->belongsTo(Recette::class, 'id');
    }
}
