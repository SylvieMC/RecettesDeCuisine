<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
	protected $table = 'categories';
	protected $fillable = ['nom','description'];

    public function recettes()
    {
        return $this->belongsToMany(Recette::class);
    }
}
