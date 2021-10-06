<?php

namespace Tests\Feature;

use App\Models\Tag;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class HomeTest extends TestCase
{
    use RefreshDatabase;

    public function test_empty(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee("There are no tags.");
    }

    public function test_with_data(): void
    {
        $tag = Tag::factory()->create();
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee($tag->name);
        $response->assertDontSee("There are no tags.");
    }
}
