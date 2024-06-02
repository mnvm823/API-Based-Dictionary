<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/nav', function () {
    return view('bootstrap_navbar');
});


Route::get('/dictionary', function () {
    return view('country_word_dictionary');
});