<?php

use App\Http\Controllers\{
    PostController
};
use Illuminate\Support\Facades\Route;

Route::any('/posts/search', [PostController::class, 'search'])->name('posts.search');

Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');
Route::delete('/posts/delete/{id}', [PostController::class, 'delete'])->name('posts.delete');
Route::get('/posts/editar/{id}', [PostController::class, 'editar'])->name('posts.editar');
Route::put('/posts/{id}', [PostController::class, 'update'])->name('posts.update');

Route::get('/', function () {
    return view('welcome');
});
