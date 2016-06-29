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
    return view('home');
});

Route::get('home/register', function () {
    return view('home/register');
});

Route::get('home/passport', function () {
    return view('home/passport');
});

Route::get('home/cart', function () {
    return view('home/cart');
});

Route::get('home/order', function () {
    return view('home/order');
});

Route::get('home/list', function () {
    return view('home/list');
});

Route::get('home/item', function () {
    return view('home/item');
});

Route::get('home/homepage', function () {
    return view('home/homepage');
});