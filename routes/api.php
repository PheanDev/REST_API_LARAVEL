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

Route::middleware('auth:api')->get('/', function (Request $request) {
    return $request->user();
});

Route::Resource('/product','ProductController');

Route::Group(['prefix'=>'product'],function(){
    Route::apiResource('/{product}/Review','ReviewController');
});

Route::post('/login',"StudentController@login")->name("login");

Route::Resource('/student','StudentController');
Route::Group(['prefix'=>'student'],function(){
     Route::apiResource('/{student}/Score','Student_Score');
});



Route::get('/res-search','PostController@search')->name('Search');

//google api
Route::get('auth/google', 'Google\GoogleController@redirectToGoogle');
Route::get('auth/google/callback', 'Google\GoogleController@handleGoogleCallback');