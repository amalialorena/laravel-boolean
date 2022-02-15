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

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'HomeController@home') -> name('home');
Route::get('/api/postcards/list', 'ApiController@getPostcards') -> name('postcards.list');

Route::get('/postcards/create', 'ApiController@createPostcards') -> name ('postcards.create');

Route::post('/postcards/store', 'ApiController@storePostcards') -> name ('postcards.store');
