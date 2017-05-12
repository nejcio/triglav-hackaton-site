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

Route::group([
    'middleware' => ['web'],
    'namespace' => 'App\Http\Controllers',
    'prefix' => '/',
], function () {
    Route::post('', 'HomeController@index')->name('home');
});
