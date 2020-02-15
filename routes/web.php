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


Route::group(['domain' => 'jaa.is'], function() {
    Route::get('/', 'UIController@Home');
    Route::get('/{page}', 'UIController@Home');
});
Route::group(['domain' => 'kofun.jaa.is'], function() {
    Route::get('/', 'UIController@Kofun');
    
    Route::get('/{page}', 'UIController@Kofun');
    Route::get('/{page}/{subpage}', 'UIController@Kofun');

    Route::get('/devtest', 'UIController@Dev');
    Route::get('/devtest/{page}', 'UIController@Dev');
});

/*
Route::get('/login', function () {
    return view('login');
});*/

