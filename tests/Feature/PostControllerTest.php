<?php

namespace Tests\Feature;

use App\Models\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostControllerTest extends TestCase
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

    public function testStore()
    {
        $this->post(route('posts.store', [
            'content' => 'Laravel test store',
        ]));

        $this->assertDatabaseHas('posts', [
            'content' => 'Laravel test store',
        ]);
    }

    public function testUpdate()
    {
        $post = new Post;
        $post->content = '';
        $post->subject_id = 0;
        $post->save();

        $this->put(route('posts.update', ['post' => $post]), [
            'content' => 'Laravel test Update',
        ]);

        $this->assertDatabaseHas('posts', [
            'content' => 'Laravel test Update'
        ]);
    }

    public function testDestroy()
    {
        $post = new Post;
        $post->content = 'Laravel test Destroy';
        $post->subject_id = 0;
        $post->save();

        $this->delete(route('posts.destroy', [ 'post' => $post]));

        $this->assertSoftDeleted('posts', [
            'content' => 'Laravel test Destroy',
        ]);
    }
}
