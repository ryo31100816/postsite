<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends BaseAuthController
{
    public function detail($post_id) {
        // dd($post_id);
        $post = Post::find($post_id);
        return view('posts/detail', ["post" => $post]);
    }
}
