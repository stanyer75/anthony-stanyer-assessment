<?php

use App\Http\Controllers\EncodeUrlController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/encode', EncodeUrlController::class);
