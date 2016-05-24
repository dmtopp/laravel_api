<?php
Route::get('/', 'PostitController@home');
Route::post('/', 'PostitController@create');
Route::get('/all', 'PostitController@all');
// this would normally be a delete route but I'm leaving it as
// get for the sake of not messing with CSRF tokens
Route::get('/delete/{id}', 'PostitController@delete');
Route::post('/update', 'PostitController@update');
Route::put('/update', 'PostitController@update');
