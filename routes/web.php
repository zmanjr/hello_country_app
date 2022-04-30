<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

ROute::get('/about-us', function() {
    return view('about_us');
});
