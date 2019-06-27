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



Route::group(['prefix' => 'attributes'], function () {
    Route::get('/', 'AttributeController@getAllAttributes');
    Route::get('/{attribute_id}', 'AttributeController@getSingleAttribute');
    Route::get('/values/{attribute_id}', 'AttributeController@getAttributeValues');
    Route::get('/inProduct/{product_id}', 'AttributeController@getProductAttributes');
});

Route::post('/customers', 'CustomerController@updateCreditCard');
Route::post('/customers/login', 'CustomerController@login');

Route::get('/customers', 'CustomerController@getCustomerProfile');

Route::put('/customers', 'CustomerController@apply');
Route::put('/customers/address', 'CustomerController@updateCustomerAddress');
Route::put('/customers/creditCard', 'CustomerController@updateCreditCard');
