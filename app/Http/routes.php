<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Defining routes for API v1
Route::group(array('prefix' => 'api/v1'), function(){

    Route::resource('posts', 'PostController');
    Route::resource('tags', 'TagController');
  
});

//Routes for Post
Route::post('api/v1/posts/store','PostController@store');
Route::post('api/v1/posts/index','PostController@index');
Route::post('api/v1/posts/show/{id}','PostController@show');
Route::post('api/v1/posts/update/{id}','PostController@update');
Route::post('api/v1/posts/destroy/{id}','PostController@destroy');
Route::post('api/v1/posts/findAllPostByTags','PostController@findAllPostByTags');

//Routes for Tag
Route::post('api/v1/tags/store','TagController@store');
Route::post('api/v1/tags/index','TagController@index');
Route::post('api/v1/tags/show/{id}','TagController@show');
Route::post('api/v1/tags/update/{id}','TagController@update');
Route::post('api/v1/tags/destroy/{id}','TagController@destroy');