<?php

use App\Http\Controllers\ProfileUploadController;
use App\Http\Controllers\TagPostController;
use App\Models\Tag;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', [
        'tags' => Tag::get()
    ]);
});

Route::get('about', function () {
    return 'about';
});

Route::view('profile', 'profile');

Route::post('profile', ProfileUploadController::class);
Route::post('tags', TagPostController::class);


