<?php

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

Route::get('/', function () {
    return view('landingpage');
});

Route::get('/signin', function () {
    return view('signin');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/settings', function () {
    return view('settings');
});

Route::get('/forgot', function () {
    return view('forgot');
});

Route::get('/reset', function () {
    return view('reset');
});

Route::get('/proposal', function () {
    return view('proposal');
});

Route::get('/upload', function () {
    return view('uploadproposal');
});

Route::get('/viewall', function () {
    return view('viewall');
});