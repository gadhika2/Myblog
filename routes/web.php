<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('photos', PhotoController::class);
Route::resource('posts', PostController::class);
