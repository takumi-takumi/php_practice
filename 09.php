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
    Route::get('newws/create', 'Admin\NewsController@add');
});

    
//課題３ 
Route::get('XXX','Admin\AAAController@bbb');

// 課題４
Route::get('admin/profile/create', 'Admin/ProfileController@add');

Route::get('admin/profile/edit', 'Admin/ProfileController@edit');

    