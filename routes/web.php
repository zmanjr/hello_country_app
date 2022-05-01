<?php

use Illuminate\Support\Facades\Route;


Route::name('app_home')->get('/', function () {
    return view('pages/welcome');
});

Route::get('/about-us', function() {
    return view('pages/about_us');
})->name('app_about');
