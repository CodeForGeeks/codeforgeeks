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

Route::get('/', "WebsiteController@index");

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::group(['prefix' => 'courses'], function () {
    Route::get('/', 'CoursesController@index')->name('courses.index');
    Route::get('/save', 'CoursesController@save')->name('courses.save');
    Route::get('/list', 'CoursesController@list')->name('courses.list');

});
