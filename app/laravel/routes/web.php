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

Auth::routes(['verify' => true]);

Route::middleware(['auth'])->group(function() {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/post/{postId}', 'PostController@detail');
    Route::get('/comment', 'CommentController@index');

    Route::get('/test', 'HomeController@test')->name('test');
    Route::get('/spa', 'HomeController@spa')->name('spa');

    Route::post('/store', 'HomeController@store')->name('store');
    Route::get('/ajax', 'HomeController@ajax');
    Route::post('/ajax/pusher', 'HomeController@pusher');
});
