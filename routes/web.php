<?php

use App\Http\Controllers\ProfileUploadController;
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


