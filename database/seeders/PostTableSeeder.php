<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subject = Subject::where('name', '測試主題')->first();
        for ($index = 1; $index < 100; $index++){
            $post = new Post;
            $post->content = 'Laravel demo Seeder' . $index;
            $post->subject_id = $subject->id;
            $post->save();
        }
        // $post = new Post;
        // $post->content = 'Laravel demo Seeder';
        // $post->subject_id = 1;
        // $post->save();
    }
}
