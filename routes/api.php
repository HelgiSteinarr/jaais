<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Store items
Route::get('storeItems', 'StoreItemController@index');
Route::get('storeItem/{id}', 'StoreItemController@show');

// Package deals
Route::get('packageDeals', 'PackageDealController@index');
Route::get('packageDeal/{id}', 'PackageDealController@show');

// Item collections
Route::get('itemCollections', 'ItemCollectionController@index');
Route::get('itemCollection/{id}', 'ItemCollectionController@show');
