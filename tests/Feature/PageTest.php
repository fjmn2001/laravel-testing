<?php

namespace Tests\Feature;

use Tests\TestCase;

class PageTest extends TestCase
{
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