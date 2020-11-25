<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function show($slug) {
        $post = Post::where('slug', $slug)->firstOrFail();

        return view('posts', [
            'post' => $post
        ]);

    }
}
