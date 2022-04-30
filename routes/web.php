<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('pages/welcome');
});

ROute::get('/about-us', function() {
    return view('pages/about_us');
});
