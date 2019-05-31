<?php

namespace Tests\Feature;

use App\IngredientRecette;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class IngredientRecetteTest extends TestCase
{
    public function testEtapeNotEmpty()
    {
        $ingredientRecette = factory(IngredientRecette::class)->create();
        $this->assertNotNull($ingredientRecette->quantite);
    }
}
