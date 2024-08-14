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
    Route::get("/blogs/create", 'showForm')->name('blog.create');
    Route::post("/blogs/create", "store")->name('blog.store');
    Route::get("/blogs/{id}", "detail")->name('blog.detail');
    Route::get("/blogs/{id}/edit", 'showEditForm')->name('blog.edit');
    Route::put("/blogs/{id}/edit", "update")->name('blog.update');
    Route::delete('/blogs/{id}', 'remove')->name('blog.remove');
});
