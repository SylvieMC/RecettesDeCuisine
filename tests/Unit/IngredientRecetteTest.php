<?php

namespace Tests\Unit;

use App\IngredientRecette;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class IngredientRecetteTest extends TestCase
{
    public function testIngredientRecetteCreation()
    {
        $ingredientRecette = factory(IngredientRecette::class)->create();
        $this->assertDatabaseHas('ingredients_recettes', [
            'quantite' => $ingredientRecette->quantite,
            'unite' => $ingredientRecette->unite,
            'ingredient_id' => $ingredientRecette->ingredient_id,
            'recette_id' => $ingredientRecette->recette_id,
        ]);
    }

   	public function testEtapeNotEmpty()
   	{
   		$ingredientRecette = factory(IngredientRecette::class)->create();
       	$this->assertNotNull($ingredientRecette->ingredient_id);
       	$this->assertNotNull($ingredientRecette->recette_id);
   	}
}
