<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('frontend.index');
    });

Route::get('/about', function () {
    return view('frontend.about');
    });

Route::get('/services', function () {
    return view('frontend.service');
    });

Route::get('/contact', function () {
    return view('frontend.contact');
    });

Route::get('/dashboard', function () {
    return view('admin.index');
    });


