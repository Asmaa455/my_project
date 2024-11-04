<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('posts',PostController::class);
Route::get('posts/restore/{id}',[PostController::class,'restore'])->name('posts.restore');
Route::get('posts/forcedelete/{id}',[PostController::class,'forcedelete'])->name('posts.delete');