<?php

namespace Tests\Feature;

use App\Etape;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class EtapeTest extends TestCase
{
    public function testEtapeNotEmpty()
    {
        $etape = factory(Etape::class)->create();
        $this->assertNotNull($etape->numero);
    }
}
