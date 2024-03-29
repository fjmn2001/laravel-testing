<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PageTest extends TestCase
{
    use RefreshDatabase;

    public function test_home()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_about()
    {
        $response = $this->get('about');

        $response->assertStatus(200);
    }
}
