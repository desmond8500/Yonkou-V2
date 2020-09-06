<?php


// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/test', function () {
//     return view('welcome1');
// });


Route::get('/', 'YonkouController@index')->name('index');


Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->middleware('verified');
