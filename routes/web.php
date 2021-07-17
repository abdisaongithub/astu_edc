<?php

Auth::routes();

Route::get('/', 'PagesController@welcome')->name('welcome');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/about', 'PagesController@about')->name('about');

Route::get('/startups', 'PagesController@startups')->name('startups');

Route::get('/detail', 'PagesController@startup_detail')->name('startup_detail');

Route::get('/contact', 'PagesController@contact')->name('contact');
Route::post('/contact', 'PagesController@contact_submit')->name('contact_submit');

Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function (){

    Route::get('/', 'DashboardController@index')->name('dashboard_index');

    Route::get('/news', 'NewsController@create')->name('news_create');
    Route::post('/news', 'NewsController@store')->name('news_store');

    Route::get('/testimonials', 'TestimonialController@create')->name('testimonial_create');
    Route::post('/testimonials', 'TestimonialController@store')->name('testimonial_store');

    Route::get('/team', 'TeamController@create')->name('team_create');
    Route::post('/team', 'TeamController@store')->name('team_store');

    Route::get('/partner', 'PartnerController@create')->name('partner_create');
    Route::post('/partner', 'PartnerController@store')->name('partner_store');

    Route::get('/startup', 'StartupController@create')->name('startup_create');
    Route::post('/startup', 'StartupController@store')->name('startup_store');



});

