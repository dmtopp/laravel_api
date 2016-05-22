<?php

// Route::get('/', function () {
//   $people = ['fred', 'bobby', 'sue'];
//
//   return view('welcome', compact('people'));
// });

Route::get('/', 'RootController@home');
