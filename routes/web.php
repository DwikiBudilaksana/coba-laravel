<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Made Dwiki Budi Laksana",
        "email" => "budilaksana.dwiki@gmail.com",
        "image" => "dwiki.jpg"
    ]);
});

Route::get('/blog', [PostController::class, 'index']);

// halaman single post
Route::get('posts/{post:slug}', [PostController::class, 'show']);
