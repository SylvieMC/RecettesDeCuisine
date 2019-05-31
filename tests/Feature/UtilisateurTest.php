<?php

namespace Tests\Feature;

use App\Utilisateur;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UtilisateurTest extends TestCase
{
    public function testUtilisateurShow()
    {
        $utilisateur = factory(Utilisateur::class)->create();
        $response = $this->json('GET', route('utilisateur.show', ['id' => $utilisateur->id]));
        $response->assertStatus(200);
    }
}
