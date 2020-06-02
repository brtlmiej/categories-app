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

Route::get('/', fn() => view('welcome'));

Route::get('/categories', 'CategoryController@index')->name('category.index');

Route::get('/categories/create', 'CategoryController@create')
    ->middleware('auth')
    ->middleware('user.admin')
    ->name('category.create');

Route::get('/categories/{category}', 'CategoryController@show')->name('category.show');

Route::post('/categories', 'CategoryController@store')
    ->middleware('auth')    
    ->middleware('user.admin')
    ->name('category.store');

Route::get('/categories/{category}/edit', 'CategoryController@edit')
    ->middleware('auth')
    ->middleware('user.admin')
    ->name('category.edit');

Route::put('/categories/{category}', 'CategoryController@update')
    ->middleware('auth')
    ->middleware('user.admin')
    ->name('category.update');

Route::get('/categories/{category}/delete', 'CategoryController@deleteWarning')
    ->middleware('auth')
    ->middleware('user.admin')
    ->name('category.warning.delete');

Route::delete('/categories/{category}', 'CategoryController@destroy')
    ->middleware('auth')
    ->middleware('user.admin')
    ->name('category.destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
