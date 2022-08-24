<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/**
Route::get('/', [PageController::class, 'home'])->name('home');

Route::get('/blog', [PageController::class, 'blog'])->name('blog');

Route::get('/blog/{slug}', [PageController::class, 'post'])->name('post');
*/

Route::controller(PageController::class)->group( function () {

    Route::get('/',            'home')->name('home');

    Route::get('/blog',        'blog')->name('blog');

    Route::get('/blog/{post:slug}', 'post')->name('post');

});

