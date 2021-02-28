<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Http\Controllers\HomeController;

class HomeControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_index()
    {
        $response = $this->actingAs($this->auth())->get('/home');
        $response->assertOK()
                 ->assertViewIs('home')
                 ->assertViewHas('posts')
                 ->assertViewHas('title');
    }
}
