<?php

namespace Tests\Unit;

use App\Utilisateur;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UtilisateurTest extends TestCase
{
    public function testCategoryCreation()
    {
        $utilisateur = factory(Utilisateur::class)->create();
        $this->assertDatabaseHas('utilisateurs', [
            'id' => $utilisateur->id,
            'pseudo' => $utilisateur->pseudo,
            'role' => $utilisateur->role,
            'avatar_id' => $utilisateur->avatar_id
        ]);
    }

   	public function testCategoryAccess()
   	{
   	$utilisateur = factory(Utilisateur::class)->create();
       $response = $this->get('/utilisateurs/'.$utilisateur->id);
       $response->assertStatus(200);
   	}
}
