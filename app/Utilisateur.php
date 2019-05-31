<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
	protected $table = 'utilisateurs';
	protected $fillable = ['pseudo','role'];

    public function avatar()
    {
        return $this->hasOne(Avatar::class, 'id');
    }

    public function recettes()
    {
        return $this->hasMany(Recette::class);
    }
}
