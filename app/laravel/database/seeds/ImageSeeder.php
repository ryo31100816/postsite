<?php

use Illuminate\Database\Seeder;
use App\Image;
use App\Post;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = Post::all();
        foreach($posts as $post){
            factory(Image::class)->create([
                'post_id' => $post->id,
            ]);
        }
    }
}
