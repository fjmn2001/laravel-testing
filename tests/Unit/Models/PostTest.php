<?php

namespace Tests\Unit\Models;

use App\Models\Post;
use PHPUnit\Framework\TestCase;

class PostTest extends TestCase
{
    public function test_set_name_in_lowercase()
    {
        $post = new Post;
        $post->name = 'PHP Project';

        $this->assertEquals('php project', $post->name);
    }

    public function test_get_slug()
    {
        $post = new Post;
        $post->name = 'PHP Project';

        $this->assertEquals('php-project', $post->slug);
    }

    public function test_get_href()
    {
        $post = new Post;
        $post->name = 'PHP Project';

        $this->assertEquals('blog/php-project', $post->href());
    }
}
