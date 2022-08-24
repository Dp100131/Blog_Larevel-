<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return View('posts.index', [
            'posts' => Post::latest()->paginate()
        ]);
    }

    public function  create()
    {
        return View('posts.create');
    }

    public function edit(Post $post)
    {
        return View('posts.edit', ['post' => $post]);
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return back();
    }
}
