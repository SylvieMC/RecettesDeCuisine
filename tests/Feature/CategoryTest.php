<?php

namespace Tests\Feature;

use App\Categorie;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CategoryTest extends TestCase
{
    public function testCategoryShow()
    {
        $category = factory(Categorie::class)->create();
        $response = $this->json('GET', route('categorie.show', ['id' => $category->id]));
        $response->assertStatus(200);
    }
}
