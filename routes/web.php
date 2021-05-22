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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/home', function () {
    return view('0029home');
});

Route::get('/artikel', function () {
    return view('0029artikel');
});

Route::get('/kontak', function () {
    return view('0029kontak');
});

Route::get('/layout', function () {
    return view('0029layout');
});
