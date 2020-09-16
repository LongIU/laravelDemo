<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HelloWorldTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/hello_world');

        // 連線`hello-world/`，HTTP Status要顯示200
        $response->assertStatus(200);

        // 存取內容需要含Hello World字眼
        $response->assertSee('Hello World!');
    }
}
