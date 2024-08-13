<?php

use App\Http\Controllers\frontend\loginController;
use Illuminate\Support\Facades\Auth;
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

 Route::prefix('admin/')->middleware(['is_admin'])->as('admin.')->group(function(){

//Route::group(['prefix'=> 'admin/', 'middleware'=> ['auth', 'is_admin'], 'as'=>'admin.'], function () {
    Route::get('/dashboard', function () {
        return view('admin.index');
        })->name('dashboard');
});


 Route::resource('/login',loginController::class);


 Route::get('/login',[loginController::class,'index'])->name('login.index');
