<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avatar extends Model
{
    public function utilisateur()
    {
        return $this->belongsTo(Utilisateur::class, 'avatar_id');
    }
}
