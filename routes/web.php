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
Route::group(['prefix' => 'admin'], function() {
    Route::get('news/create', 'Admin\NewsController@add');
});

<<<<<<< HEAD


Route::group(['prefix' => 'admin'], function(){
    route::get('profile/create', 'Admin\ProfileController@add');
    route::get('profile/edit', 'Admin\ProfileController@edit');
});
=======
Route::get('bbb', 'Bbb\AAAController@add');

Route::group(['prefix' => 'admin'], function(){
    route::get('pprofile/create', 'Admin\ProfileController@add');
    route::get('profile/edit', 'Admin\ProfileController@edit');
});
>>>>>>> a22509d9f2360a5ae74ed3d4daab04a782047c79
