<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index()
    {
        return View('posts.index', [
            'posts' => Post::latest()->paginate()
        ]);
    }

    public function  create(Post $post)
    {

        return View('posts.create', ['post' => $post]);
    }

    public function  store(Request $request)
    {
        $post = $request->user()->posts()->create([

            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'body'  => $request->body
        ]);

        /* $post = new Post();

        $post->title = $request->name;
        $post->slug = Str::slug($request->name);
        $post->body = $request->body;
        $post->user_id = $request->user();


        $post->save(); */


        return redirect()->route('posts.edit', $post);
    }

    public function edit(Post $post)
    {
        return View('posts.edit', ['post' => $post]);
    }

    public function  update(Request $request, Post $post)
    {
        $post->update([

            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'body'  => $request->body
        ]);

        return redirect()->route('posts.edit', $post);
    }



    public function destroy(Post $post)
    {
        $post->delete();
        return back();
    }
}
