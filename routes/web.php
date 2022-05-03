<?php

use Illuminate\Support\Facades\Route;


Route::view('/','pages/welcome')->name('app_home');

Route::view('/about-us', 'pages/about_us')->name('app_about');
