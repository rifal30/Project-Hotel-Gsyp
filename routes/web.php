<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\akunController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/index', function () {
    return view('pages.index');
});

Route::get('/about', function(){
    return view('pages.about');
});

Route::get('/contact', function(){
    return view('pages.contact');
});

Route::get('/fasilitas', function(){
    return view('pages.fasilitas');
});

Route::get('/rooms', function(){
    return view('pages.rooms');
});


// Login

Route::get('/login', [akunController::class, 'index'])->name('login');

Route::post('/logincheck', [akunController::class, 'Login']);

Route::get('/logOut', function(){
    Auth::logout();
    return redirect('/');
});

// Register

Route::get('/register', function(){
    return view('akun.register');
});

Route::post('/addData', [akunController::class,'addData']);
