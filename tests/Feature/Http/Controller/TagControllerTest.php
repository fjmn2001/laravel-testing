<?php

namespace Tests\Feature\Http\Controller;

use App\Models\Tag;
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

    public function test_destroy()
    {
        $tag = Tag::factory()->create();

        $response = $this->delete("tags/{$tag->id}");

        $response->assertRedirect('/');
        $this->assertDatabaseMissing('tags', ['name' => $tag->name]);
    }
}
