<?php

namespace Tests\Unit;

use App\Etape;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class EtapeTest extends TestCase
{
    public function testEtapeCreation()
    {
        $etapes = factory(Etape::class)->create();
        $this->assertDatabaseHas('etapes', [
            'id' => $etapes->id,
            'numero' => $etapes->numero,
            'description' => $etapes->description,
            'recette_id' => $etapes->recette_id,
        ]);
    }

   	public function testEtapeNotEmpty()
   	{
   		$etape = factory(Etape::class)->create();
      $this->assertNotNull($etape->description);
   	}
}
