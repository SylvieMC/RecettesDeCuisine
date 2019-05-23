<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class IngredientRecette extends Pivot
{
	protected $table = 'ingredients_recettes';
}
