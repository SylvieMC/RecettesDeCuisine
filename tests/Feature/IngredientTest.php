<?php

namespace Tests\Feature;

use App\Ingredient;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class IngredientTest extends TestCase
{
    public function testEtapeNotEmpty()
    {
        $ingredient = factory(Ingredient::class)->create();
        $this->assertNotNull($ingredient->id);
    }
}
