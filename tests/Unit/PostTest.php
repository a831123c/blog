<?php

namespace Tests\Unit;

use App\Models as model;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PostTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $posts = model\Article::getNewest();

        // Then the response should be in the proper format.
        $this->assertEquals(3, count($posts));
    }

    public function test()
    {
        $this->call('GET', '/post');
        // Then the response should be in the proper format.
        $this->assertResponseOk();
    }
}
