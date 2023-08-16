<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/About', function () {
    return view('about');
});
Route::get('/Features', function () {
    return view('features');
});
Route::get('/Screenshots', function () {
    return view('screenshots');
});
Route::get('/Team', function () {
    return view('team');
});
Route::get('/Team', function () {
    return view('team');
});
Route::get('/Contact', function () {
    return view('contact');
});
Route::get('/Donate', function () {
    return view('donate');
});
Route::get('/Pricing', function () {
    return view('pricing');
});