<?php

Route::get('/', 'PagesController@home');
Route::get('about', 'PagesController@about');
Route::get('services', 'PagesController@services');
Route::get('works', 'PagesController@works');
Route::get('contact', 'PagesController@contact');
Route::post('sendmail', 'PagesController@sendmail');

Route::get('proyecto/agua-maldita-mezcal', 'PagesController@aguamaldita');
Route::get('proyecto/kamado-grill', 'PagesController@kamado');
Route::get('proyecto/boreal', 'PagesController@boreal');
