<?php

use Illuminate\Support\Facades\Route;
use App\Product;
use App\User;


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

Route::get('/', 'HomeController@index');
Route::resource('products','ProductsController');
Route::resource('categories','CategoriesController');
Route::resource('manufacturers','ManufacturersController');
Route::resource('users', 'UsersController');
Route::resource('orders', 'OrdersController');
Route::get('products/add-to-cart/{id}','ProductsController@addToCart')->name('addToCart');
Route::get('oders/show','OrdersController@showOrder')->name('showOrder');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin','AdminController@index')->name('admin');
Route::get('/products/manufacuter/{id}','ManufacturersController@showProductswithManu')->name('productsWithManu');
