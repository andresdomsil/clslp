<?php

// http://clslp2.test/ = Route::get('/', function)
// http://clslp2.test/admin = Route::get('admin', function)

Route::get('/', function(){ return view('welcome');         } )->name('home');

Route::get('admin', function(){ return view('admin.dashboard'); } );
Route::get('login', function(){ return view('admin.login');     } );
Route::get('user',  function(){ return view('admin.user');      } );
Route::get('registro',  function(){ return view('admin.registro');      } );
Route::get('data',  function(){ return view('admin.data');      } );
Route::get('certificaciones',  function(){ return view('admin.certificaciones');      } );
