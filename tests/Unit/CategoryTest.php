<?php

namespace Tests\Unit;

use App\Categorie;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CategoryTest extends TestCase
{
    public function testCategoryCreation()
    {
        $category = factory(Categorie::class)->create();
        $this->assertDatabaseHas('categories', [
            'id' => $category->id,
            'nom' => $category->nom,
            'description' => $category->description,
        ]);
    }

   	public function testCategoryAccess()
   	{
   	$category = factory(Categorie::class)->create();
       $response = $this->get('/categories/'.$category->id);
       $response->assertStatus(200);
   	}
}
