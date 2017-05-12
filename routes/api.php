<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group([
    'middleware' => ['api'],
    'prefix' => '/',
], function () {
    //manufacturer
    Route::get('', 'ApiController@list')->name('list');
    Route::get('{hash}', 'ApiController@show')->name('show');
    Route::post('', 'ApiController@store')->name('store');
    Route::patch('{hash}', 'ApiController@update')->name('update');
    Route::delete('{hash}', 'ApiController@destroy')->name('destroy');
});
