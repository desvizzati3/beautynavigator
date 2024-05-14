<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Our Homepage.']);
});

Route::get('/fmm', function () {
    return view('fmm', ['title' => 'Find My Makeup.']);
});
