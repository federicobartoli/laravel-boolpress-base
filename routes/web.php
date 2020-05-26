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

// Homepage
Route::get('/', function () {
    return view('index' );
})->name('homepage');

Route::get('/', 'PostController@index2')->name('homepage');
Route::get('/UserController', 'Admin\UserController@index')->name('UserController');

// Posts
Route::resource('posts', 'PostController')->middleware('auth');
Route::resource('categories', 'Admin\CategoryController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
