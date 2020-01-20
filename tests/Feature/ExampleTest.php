<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /**
     * Checks that /contact doesn't exist.
     *
     * @return void
     */
    public function testNonexistentEndpointReturns404()
    {
        $response = $this->get('/contact');
        
        $response->assertStatus(404);
    }
    
    public function testHomepageContainsProjectName()
    {
        $response = $this->get('/');

        $response->assertSeeText('Laravel');
    }
    
}
