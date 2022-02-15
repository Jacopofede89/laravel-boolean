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

Route::get('/', 'GuestController@home') ->name('home');

Route::get('/postcards/create', 'GuestController@createPostcard') -> name('postcards.create');

Route::post('/postcards/store', 'GuestController@store') -> name('postcards.store');

Route::get('/api/postcards/list', 'ApiController@getPostcards') -> name('api.postcards.list');

