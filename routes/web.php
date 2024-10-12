<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    //return view('home.index');
    $data = [
        'content' => 'home/index'
    ];
    return view('home.layout.wrapper', $data);
});

Route::get('/admissions', function () {
    //return view('home.index');
    $data = [
        'content' => 'home/admissions/index'
    ];
    return view('home.layout.wrapper', $data);
});

Route::get('/about', function () {
    //return view('home.index');
    $data = [
        'content' => 'home/about/index'
    ];
    return view('home.layout.wrapper', $data);
});

Route::get('/courses', function () {
    //return view('home.index');
    $data = [
        'content' => 'home/courses/index'
    ];
    return view('home.layout.wrapper', $data);
});

Route::get('/contact', function () {
    //return view('home.index');
    $data = [
        'content' => 'home/contact/index'
    ];
    return view('home.layout.wrapper', $data);
});

Route::get('/login', function () {
    //return view('home.index');
    $data = [
        'content' => 'auth/login'
    ];
    return view('home.layout.wrapper', $data);
});

Route::get('/csingle', function () {
    //return view('home.index');
    $data = [
        'content' => 'home/courses/csingle'
    ];
    return view('home.layout.wrapper', $data);
});

Route::get('/register', function () {
    //return view('home.index');
    $data = [
        'content' => 'auth/register'
    ];
    return view('home.layout.wrapper', $data);
});
