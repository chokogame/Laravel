<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

// トップページ
Route::get('/', function () {
    return view('home');
});

// ブログページ関連
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');
Route::get('/category/{category}', [BlogController::class, 'category'])->name('blog.category');
