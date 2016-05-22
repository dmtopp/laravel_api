<?php
Route::get('/', 'PostitController@home');
Route::post('/', 'PostitController@create');
Route::get('/all', 'PostitController@all');
