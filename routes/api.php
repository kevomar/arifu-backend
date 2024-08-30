<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return "hello there";
})->middleware('auth:sanctum');

Route::get('/hello', fn () => "Hello");
