<?php

Route::get('/', function () {
    return view('welcome');
});

Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:admin')->group(function() {
    Route::resource('/books', 'BooksController');
    Route::resource('/users', 'UsersController');
    Route::resource('/rented', 'RentsController');
    Route::get('/history', 'MiscsController');
    Route::patch('/users/{student_id}', 'UsersController@update');    
    // Route::get('/rented/rent-history', 'MiscsController@getHistory');
});



Route::namespace('User')->prefix('user')->name('user.')->middleware('can:user')->group(function() {
    Route::resource('/rented', 'RentsController');
    Route::resource('/books', 'BooksController');
    Route::patch('/rented/{rented}', 'RentsController@update');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
