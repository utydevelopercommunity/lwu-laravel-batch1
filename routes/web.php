<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


// http://localhost:8000/
Route::get('/', function () {
    return view('home');
})->name('index');

// http://localhost:8000/blogs
Route::controller(PostController::class)->group(function () {
    Route::get("/blogs", 'main')->name('blog.index');
});
