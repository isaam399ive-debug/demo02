<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/saludo', function () {
    return ('g');
});

Route::get('/bienvenido', function () {
    return view('bienvenido');
});