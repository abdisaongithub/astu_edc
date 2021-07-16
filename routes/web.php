<?php

Auth::routes();

Route::get('/', 'PagesController@welcome')->name('welcome');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/about', 'PagesController@about')->name('about');

Route::get('/startups', 'PagesController@startups')->name('startups');

Route::get('/detail', 'PagesController@startup_detail')->name('startup_detail');

Route::get('/contact', 'PagesController@contact')->name('contact');
Route::post('/contact', 'PagesController@contact_submit')->name('contact_submit');

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
