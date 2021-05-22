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

Route::get('/home', [HomeController::class, 'index']);

Route::get('/artikel', function () {
    return view('artikel0029');
});

Route::get('/kontak', function () {
    return view('kontak0029');
});

Route::get('/layout', function () {
    return view('layout0029');
});
