<?php

namespace Tests\Unit;

use App\Ingredient;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class IngredientTest extends TestCase
{
    public function testIngredientCreation()
    {
        $ingredient = factory(Ingredient::class)->create();
        $this->assertDatabaseHas('ingredients', [
            'id' => $ingredient->id,
            'nom' => $ingredient->nom,
        ]);
    }

   	public function testEtapeNotEmpty()
   	{
   		$ingredient = factory(Ingredient::class)->create();
       	$this->assertNotNull($ingredient->nom);
   	}
}
