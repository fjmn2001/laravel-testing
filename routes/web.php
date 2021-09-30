<?php

use App\Http\Controllers\ProfileUploadController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function () {
    return 'about';
});

Route::view('profile', 'profile');

Route::post('profile', ProfileUploadController::class);


