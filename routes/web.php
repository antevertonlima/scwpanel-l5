<?php

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

Route::middleware(['auth'])->get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])->prefix('scwpanel')->group(function () {
	Route::get('/dashboard', 'HomeController@index')->name('scwpanel.dashboard');
    Route::prefix('theme')->group(function(){
    	Route::get('/', 'ThemeController@index')->name('theme.list');
    	Route::get('/upload', 'ThemeController@upload')->name('theme.set');
		Route::post('/upload', 'ThemeController@move')->name('theme.send');
    });
});
