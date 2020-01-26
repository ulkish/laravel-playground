<?php

namespace Tests\Unit\Models;

use PHPUnit\Framework\TestCase;

use Illuminate\Foundation\Testing\RefreshDatabase;

class PostTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function testPostTitleCapitalizationIsCorrect()
    {
        $post = factory(\App\Post::class)->make(
            [
                'title' => 'have fun with the other Frameworks.',
                'content' => 'some content'
            ]
        );

        $this->assertEquals($post->title, 'Have Fun with the Other Frameworks');
    }
}
