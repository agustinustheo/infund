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

Route::get('/forgot', function () {
    return view('forgot');
});

Route::get('/reset', function () {
    return view('reset');
});

// Route::get('/home', 'HomeController@index')->name('home');


// Authentication Routes...
Route::get('signin', [
    'as' => 'login',
    'uses' => 'Auth\LoginController@showLoginForm'
  ]);
  Route::post('signin', [
    'as' => '',
    'uses' => 'Auth\LoginController@login'
  ]);
  Route::get('logout', [
    'as' => 'logout',
    'uses' => 'Auth\LoginController@logout'
  ]);
  
  // Password Reset Routes...
  Route::post('password/email', [
    'as' => 'password.email',
    'uses' => 'Auth\ForgotPasswordController@sendResetLinkEmail'
  ]);
  Route::get('password/reset', [ 
    'as' => 'password.request',
    'uses' => 'Auth\ForgotPasswordController@showLinkRequestForm'
  ]);
  Route::post('password/reset', [
    'as' => 'password.update',
    'uses' => 'Auth\ResetPasswordController@reset'
  ]);
  Route::get('password/reset/{token}', [
    'as' => 'password.reset',
    'uses' => 'Auth\ResetPasswordController@showResetForm'
  ]);
  
  // Registration Routes...
  Route::get('signup', [
    'as' => 'register',
    'uses' => 'Auth\RegisterController@showRegistrationForm'
  ]);
  Route::post('signup', [
    'as' => '',
    'uses' => 'Auth\RegisterController@register'
  ]);
Route::group(['middleware' => ['auth']], function() {
    Route::get('/dashboard', function () {
        return view('dashboard');
    });
    
    Route::get('/profile', function () {
        return view('profile');
    });
    
    Route::get('/settings', function () {
        return view('settings');
    });

    Route::get('/proposal', function () {
        return view('proposal');
    });

    Route::get('/upload', function () {
        return view('uploadproposal');
    });
});