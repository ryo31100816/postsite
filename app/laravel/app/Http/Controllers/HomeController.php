<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class HomeController extends BaseAuthController
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $title = 'postsite';
        $posts = Post::all();
        return view('home')->with('posts', $posts)->with('title', $title);
    }
}
