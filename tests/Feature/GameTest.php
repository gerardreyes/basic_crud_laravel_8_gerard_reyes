<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class GameTest extends TestCase
{
    /**
     * Visit the home page.
     * Expected response is 200.
     *
     * @return void
     */
    public function test_visit_home_page()
    {
        $response = $this->get('/games');
        $response->assertStatus(200);
    }

    /**
     * Visit the create page.
     * Expected response is 200.
     *
     * @return void
     */
    public function test_visit_create_page()
    {
        $response = $this->get('/games/create');
        $response->assertStatus(200);
    }
}
