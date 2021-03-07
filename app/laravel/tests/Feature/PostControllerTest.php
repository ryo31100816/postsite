<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Post;

class PostControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_detail()
    {
        $url = sprintf('/post/%s', $this->getRecord()->id);
        $response = $this->actingAs($this->auth())->get($url);

        $response->assertOK()
                ->assertViewIs('posts.detail')
                ->assertViewHas('post');
    }

    protected function getRecord()
    {
        return Post::inRandomOrder()->first();
    }
}
