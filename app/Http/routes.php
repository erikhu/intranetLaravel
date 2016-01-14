<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/home', function () {
    return view('auth.login');
});

Route::get('/alumnos/welcome', function () {
    return view('alumnos.welcomeintranet');
});

Route::get('/docentes/welcome', function () {
    return view('docentes.welcomeintranet');
});

Route::get('/padres/welcome', function () {
    return view('padres.welcomeintranet');
});

Route::get('/registro/docentes', function () {
    return view('auth.registrodocentes');
});

Route::get('/registro/alumnos', function () {
    return view('auth.registroalumnos');
});

Route::get('/registro/padres', function () {
    return view('auth.registropadres');
});

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');