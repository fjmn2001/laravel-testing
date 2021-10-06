<?php

namespace Tests\Feature\Http\Controller;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TagControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_store()
    {
        $response = $this->post('tags', [
            'name' => 'PHP'
        ]);

        $response->assertRedirect();
        $this->assertDatabaseHas('tags', ['name' => 'PHP']);
    }
}
