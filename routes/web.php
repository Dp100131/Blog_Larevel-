<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;

/**
Route::get('/', [PageController::class, 'home'])->name('home');

Route::get('/blog', [PageController::class, 'blog'])->name('blog');

Route::get('/blog/{slug}', [PageController::class, 'post'])->name('post');
*/

Route::controller(PageController::class)->group( function () {

    Route::get('/',                 'home')->name('home');

    Route::get('/blog/{post:slug}', 'post')->name('post');

});

Route::redirect('dashboard', 'posts')->name('dashboard');

Route::resource('posts', PostController::class)->middleware('auth')->except(['show']);

require __DIR__.'/auth.php';
