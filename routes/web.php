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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//admin
Route::get('/admin/index' , 'admin\AdminController@index')->name('admin');

//category
Route::get('/admin/categories/index' , 'admin\CategoriesController@index')->name('categories');
Route::post('/admin/categories/create','admin\CategoriesController@create');
Route::get('/admin/categories/edit/{id}','admin\CategoriesController@edit');
Route::post('/admin/categories/update/{id}','admin\CategoriesController@update');
Route::get('/admin/categories/delete/{id}','admin\CategoriesController@delete');

//product
Route::get('/admin/products/index','admin\ProductsController@index')->name('products');
Route::post('/admin/products/create','admin\ProductsController@create');
Route::get('/admin/products/edit/{id}','admin\ProductsController@edit');
Route::post('/admin/products/update/{id}','admin\ProductsController@update');
Route::get('/admin/products/delete/{id}','admin\ProductsController@delete');

//promote
Route::get('/admin/promotes/index' , 'admin\PromotesController@index')->name('promotes');
Route::post('/admin/promotes/create','admin\PromotesController@create');
Route::get('/admin/promotes/edit/{id}','admin\PromotesController@edit');
Route::post('/admin/promotes/update/{id}','admin\PromotesController@update');
Route::get('/admin/promotes/delete/{id}','admin\PromotesController@delete');

//service
Route::get('/admin/services/index' , 'admin\ServicesController@index')->name('services');
Route::post('/admin/services/create','admin\ServicesController@create');
Route::get('/admin/services/edit/{id}','admin\ServicesController@edit');
Route::post('/admin/services/update/{id}','admin\ServicesController@update');
Route::get('/admin/services/delete/{id}','admin\ServicesController@delete');

//user
Route::get('/admin/users/index' , 'admin\UsersController@index')->name('users');
Route::get('/admin/users/delete/{id}' , 'admin\UsersController@delete');

//Welcome
Route::post('/welcome','admin\WelcomeController@logout');
