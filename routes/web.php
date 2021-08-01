<?php

Auth::routes();

Route::get('/', 'PagesController@welcome')->name('welcome');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/about', 'PagesController@about')->name('about');

Route::get('/startups', 'PagesController@startups')->name('startups');

Route::get('/startups/{id}', 'PagesController@startup_detail')->name('startup_detail');

Route::get('/contact', 'PagesController@contact')->name('contact');
Route::post('/contact', 'PagesController@contact_submit')->name('contact_submit');

Route::get('/services', 'PagesController@services')->name('services');

Route::get('/news', 'PagesController@news')->name('news');

Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function (){

    Route::get('/', 'DashboardController@index')->name('dashboard_index');

    Route::get('/news/create', 'NewsController@create')->name('news_create');
    Route::post('/news/store', 'NewsController@store')->name('news_store');
    Route::get('/news/edit/{id}', 'NewsController@edit')->name('news_edit');
    Route::put('/news/update/{id}', 'NewsController@update')->name('news_update');

    Route::get('/testimonials/create', 'TestimonialController@create')->name('testimonial_create');
    Route::post('/testimonials/store', 'TestimonialController@store')->name('testimonial_store');
    Route::get('/testimonials/edit/{id}', 'TestimonialController@edit')->name('testimonial_edit');
    Route::put('/testimonials/update/{id}', 'TestimonialController@update')->name('testimonial_update');

    Route::get('/team/create', 'TeamController@create')->name('team_create');
    Route::post('/team/store', 'TeamController@store')->name('team_store');
    Route::get('/team/edit/{id}', 'TeamController@edit')->name('team_edit');
    Route::put('/team/update/{id}', 'TeamController@update')->name('team_update');

    Route::get('/partner/create', 'PartnerController@create')->name('partner_create');
    Route::post('/partner/store', 'PartnerController@store')->name('partner_store');
    Route::get('/partner/edit/{id}', 'PartnerController@edit')->name('partner_edit');
    Route::put('/partner/update/{id}', 'PartnerController@update')->name('partner_update');


    Route::get('/startup/create', 'StartupController@create')->name('startup_create');
    Route::post('/startup/store', 'StartupController@store')->name('startup_store');
    Route::get('/startup/edit/{id}', 'StartupController@edit')->name('startup_edit');
    Route::put('/startup/update/{id}', 'StartupController@update')->name('startup_update');



});

