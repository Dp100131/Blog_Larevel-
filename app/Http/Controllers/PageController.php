<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function blog()
    {
        //Consulta a bases de datos
        //$posts = Post::get();
        //$posts = Post::first(); #Trae el primer registro
        //$posts = Post::find(25); #Trae por ID
        // Datos paginada:
        $posts = Post::latest()->paginate();

        return view('blog', ['posts' => $posts]);
    }

    public function post(Post $post)
    {
        //Consulta a base de datos

        return view('post', ['post' => $post]);
    }

}
