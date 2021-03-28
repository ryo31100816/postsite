<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Events\MessagePusher;
use App\Http\Requests\TestRequest;
use Auth;
use Log;

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

    public function test()
    {
        $title = 'postsite';
        $posts = Post::all();
        return view('vue_test')->with('posts', $posts)->with('title', $title);
    }

    public function spa()
    {
        $title = 'postsite';
        $posts = Post::all();
        return view('spa')->with('posts', $posts)->with('title', $title);
    }

    public function store(TestRequest $request)
    {
        dd($request->query());
    }

    public function ajax()
    {
        // $posts = Post::all();
        // return json_encode($posts);
        $a = storage_path('bin/tes.csv');
        $headers = ['Content-Type'=> 'application/plain',
        'Content-Disposition' => "attachment; filename=tes.csv",
        ];
        Log::debug($a);
        return response()->download($a, 'test.csv', $headers);
    }

    public function pusher(Request $request)
    {
        $message = $request->message;
        $record = Post::create([
            'user_id' => 10,
            'contents' => $message
        ]);
        event(new MessagePusher($record));
    }
}
