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
    return view('home.index');
});

Route::get('/about', function () {
    return view('About.index');
});

Route::get('/admission', function () {
    return view('Admission.index');
});

Route::get('/contact', function () {
    return view('Contact.index');
});

Route::get('/courses', function () {
    return view('Courses.index');
});