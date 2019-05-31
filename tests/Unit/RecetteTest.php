<?php

namespace Tests\Unit;

use App\Recette;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RecetteTest extends TestCase
{
    public function testRecetteCreation()
    {
        $recette = factory(Recette::class)->create();
        $this->assertDatabaseHas('recettes', [
            'id' => $recette->id,
            'nom' => $recette->nom,
            'description' => $recette->description,
            'image' => $recette->image,
            'temps_preparation' => $recette->temps_preparation,
            'nombre_portion' => $recette->nombre_portion,
            'utilisateur_id' => $recette->utilisateur_id
        ]);
    }

   	public function testRecetteAccess()
   	{
   	$recette = factory(Recette::class)->create();
       $response = $this->get('/recettes/'.$recette->id);
       $response->assertStatus(200);
   	}
}
