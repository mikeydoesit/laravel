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

// Static pages
Route::get('/', 'App\Http\Controllers\StaticPagesController@home');
Route::get('/menu', 'App\Http\Controllers\StaticPagesController@menu');
Route::get('/menu/{slug}', 'App\Http\Controllers\StaticPagesController@singleMenu');
Route::get('/about', 'App\Http\Controllers\StaticPagesController@about');
Route::get('/contact', 'App\Http\Controllers\StaticPagesController@contact');
Route::get('/reservation', 'App\Http\Controllers\StaticPagesController@reservation');
Route::get('/offers', 'App\Http\Controllers\StaticPagesController@offers');

// Admin Dashboard
Route::get('/admin', 'App\Http\Controllers\AdminController@dashboard');

//Admin Food Categories
Route::get('/admin/food-categories', 'App\Http\Controllers\admin\FoodCategoriesController@index');
Route::get('/admin/food-categories/create', 'App\Http\Controllers\admin\FoodCategoriesController@create');
Route::get('/admin/food-categories/{id}/edit', 'App\Http\Controllers\admin\FoodCategoriesController@edit');

//Admin Food Items
Route::get('/admin/food-items', 'App\Http\Controllers\admin\FoodItemsController@index');
Route::get('/admin/food-items/create', 'App\Http\Controllers\admin\FoodItemsController@create');
Route::get('/admin/food-items/{id}/edit', 'App\Http\Controllers\admin\FoodItemsController@edit');

//Admin Customers
Route::get('/admin/offers-members', 'App\Http\Controllers\admin\CustomersController@allOffersMembers');
Route::get('/admin/reservations', 'App\Http\Controllers\admin\CustomersController@reservations');

//Admin authentication
Route::get('/register', function () {
    return view('pages/register');
});
Route::get('/login', function () {
    return view('pages/login');
});