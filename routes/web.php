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

Route::group(['prefix' => 'dashboard'], function () {

    Route::get('/', 'DashboardController@index')->name('dashboard');

    /**
     * Create, Read, Update & Delete
     */
    Route::group(['prefix' => 'courses'], function () {
        Route::get('/', 'CoursesController@index')->name('courses.index');
        Route::get('/save', 'CoursesController@save')->name('courses.save');
        Route::get('/list', 'CoursesController@list')->name('courses.list');
    });

    Route::group(['prefix' => 'technology'], function () {
        Route::get('/', 'TechnologyController@index')->name('technology.index');
        Route::get('/save', 'TechnologyController@save')->name('technology.save');
        Route::get('/list', 'TechnologyController@list')->name('technology.list');
    });
    Route::group(['prefix' => 'about'], function () {
        Route::get('/', 'AboutController@index')->name('about.index');
        Route::get('/save', 'AboutController@save')->name('about.save');
        Route::get('/list', 'AboutController@list')->name('about.list');
    });
    Route::group(['prefix' => 'team'], function () {
        Route::get('/', 'TeamController@index')->name('team.index');
        Route::post('/save', 'TeamController@save')->name('team.save');
        Route::get('/list', 'TeamController@list')->name('team.list');
    });
    Route::group(['prefix' => 'testimonial'], function () {
        Route::get('/', 'TestimonialController@index')->name('testimonial.index');
        Route::post('/save', 'TestimonialController@save')->name('testimonial.save');
        Route::get('/list', 'TestimonialController@list')->name('testimonial.list');
    });
    Route::group(['prefix' => 'blog_category'], function () {
        Route::get('/', 'BlogCategoryController@index')->name('blog_category.index');
        Route::post('/save', 'BlogCategoryController@save')->name('blog_category.save');
        Route::get('/list', 'BlogCategoryController@list')->name('blog_category.list');
    });

});
