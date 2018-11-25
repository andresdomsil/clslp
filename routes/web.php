<?php

// http://clslp2.test/ = Route::get('/', function)
// http://clslp2.test/admin = Route::get('admin', function)

Route::get('/', function(){ return view('welcome');         } )->name('home');

Route::get('admin', function(){ return view('admin.dashboard'); } );

Route::get('about', 'PagesController@about')->name('pages.about');
Route::get('contacto', 'PagesController@contact')->name('pages.contact');
Route::post('contacto/send', 'PagesController@store')->name('pages.contact.send');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'auth'], function(){

       Route::get('users', 'UsersController@index')->name('admin.users.index');

});
