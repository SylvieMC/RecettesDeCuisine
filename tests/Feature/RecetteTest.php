<?php

namespace Tests\Feature;

use App\Recette;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RecetteTest extends TestCase
{
    public function testCategoryShow()
    {
        $recette = factory(Recette::class)->create();
        $response = $this->json('GET', route('recette.show', ['id' => $recette->id]));
        $response->assertStatus(200);
    }
}
