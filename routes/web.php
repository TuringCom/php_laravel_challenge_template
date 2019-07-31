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
    return response()->json([
        'success' => true,
        'message' => 'Welcome to Turing E-commerce shop api, your goal is to implement the missing code or fix the bugs inside this project',
]);
});
