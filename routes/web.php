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
    return view('home');
});
Route::get('/about', function () {
    return view('pages/about');
});
Route::get('/menu', function () {
    return view('menu/index');
});
Route::get('/waitlist', function () {
    return view('pages/waitlist');
});
Route::get('/offers', function () {
    return view('pages/offers');
});
Route::get('/menu/{slug}', function () {
    return view('menu/single-menu');
});
Route::get('/admin', function () {
    return view('admin/dashboard');
});

Route::get('/contact', function () {
    return view('pages/contact');
});
Route::get('/register', function () {
    return view('pages/register');
});
Route::get('/login', function () {
    return view('pages/login');
});
