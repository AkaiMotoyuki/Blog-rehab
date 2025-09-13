<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController; 

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello, Laravel!';
});

Route::resource('posts', PostController::class);
