<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class HomeTest extends TestCase
{
    use RefreshDatabase;

    public function test_empty()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee("There are no tags.");
    }
}
