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

Route::get('/', function(){
    return view('welcome');
});

Route::get('/categories', 'CategoryController@index')->name('category.index');
Route::get('/categories/create', 'CategoryController@create')->name('category.create');
Route::get('/categories/{category}', 'CategoryController@show')->name('category.show');
Route::post('/categories', 'CategoryController@store')->name('category.store');
Route::get('/categories/{category}/edit', 'CategoryController@edit')->name('category.edit');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
