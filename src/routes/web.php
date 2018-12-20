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
    return view('layouts.main');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group([
    'prefix' => '/admin', 
    'middleware' => ['auth', 'CheckIfIsAdmin']
], function () {
    Route::get('/', [
        "as" => 'AdminView',
        "uses" => 'AdminController@displayMainView'
    ]);
    Route::get('/users', [
        "as" => 'usersView',
        "uses" => 'AdminController@displayUsers'
    ]);
    Route::get('/user/update/{id}', [
        "as" => 'userUpdateView',
        "uses" => 'AdminController@updateUserView'
    ]);
    Route::post('/user/update', [
        "as" => 'userUpdate',
        "uses" => 'AdminController@updateUser'
    ]);
    Route::get('/user/delete/{id}', [
        "as" => 'userDelete',
        "uses" => 'AdminController@deleteUser'
    ]);
    Route::get('/user/promote/{id}', [
        "as" => 'userPromotion',
        "uses" => 'AdminController@promoteUser'
    ]);
    Route::get('/user/demote/{id}', [
        "as" => 'userPromotion',
        "uses" => 'AdminController@demoteUser'
    ]);
    Route::get('/contries', [
        "as" => 'contriesView',
        "uses" => 'AdminController@displaycontries'
    ]);
    Route::get('/experiences', [
        "as" => 'experiencesView',
        "uses" => 'AdminController@displayExperiences'
    ]);
});
