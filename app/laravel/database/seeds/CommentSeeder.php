<?php

use Illuminate\Database\Seeder;
use App\Comment;
use App\Post;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $posts = Post::inRandomOrder()->take(5)->get();
       foreach($posts as $post){
           factory(Comment::class)->create([
               'post_id' => $post->id,
           ]);
       }
    }
}
