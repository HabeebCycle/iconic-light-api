<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
	
	public function testVideoLinkAddedCorrectly()
    {
        $response = $this->json('GET', '/cors', [], {})
            ->assertStatus(200)
            ->assertJsonStructure([
                '*' => ['_links', '_embedded', 'page_count', 'page_size', 'total_items', 'page'],
            ]);
    }
}
