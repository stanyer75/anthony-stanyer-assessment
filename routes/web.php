<?php

use App\Http\Controllers\DecodeUrlController;
use App\Http\Controllers\EncodeUrlController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::post('/encode', EncodeUrlController::class);
Route::get('/decode/{url}', DecodeUrlController::class);
