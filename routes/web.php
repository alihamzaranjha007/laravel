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


    // Admin path / routes

// Route::prefix('admin/')->middleware(['auth'])->as('admin.')->group(function(){
    
Route::group(['prefix'=> 'admin/', 'middleware'=> ['auth', 'is_admin'], 'as'=>'admin.'], function () {
    Route::get('/dashboard', function () {
        return view('admin.index');
        })->name('dashboard');
    
    Route::get('/login', function () {
        return view('login');
        });   
});


Route::get('/login', function () {
    return view('login');
    }); 
//
