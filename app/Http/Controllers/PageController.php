<?php

namespace App\Http\Controllers;

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

        $posts = [
            ['id' => 1,
            'title' => 'PHP',
            'slug' => 'php'],
            ['id' => 2,
            'title' => 'LARAVEL',
            'slug' => 'laravel']
        ];

        return view('blog', ['posts' => $posts]);
    }

    public function post($slug)
    {
        //Consulta a base de datos

        $post = $slug;

        return view('post', ['post' => $post]);
    }

}
