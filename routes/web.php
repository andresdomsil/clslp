<?php

// http://clslp2.test/ = Route::get('/', function)
// http://clslp2.test/admin = Route::get('admin', function)

//Route::get('/', function(){ return view('welcome');         } )->name('home');
/*Route::get('/', function(){ return view('admin.login');         } )->name('home');*/

Route::get('/', function() { 
	return view('admin.dashboard'); 
})->name('Home');

Route::get('login', function(){ return view('admin.login');     } );

Route::get('user',  function(){ return view('admin.user');      } )->name('agregar');

Route::get('registro',  function(){ return view('admin.registro');      } );
Route::get('data',  function(){ return view('admin.data');      } );
Route::get('certificaciones',  function(){ return view('admin.certificaciones');      } );
Route::get('empresas',  function(){ return view('admin.empresas');      } );
//Equipos
//Route::get('equipos',  function(){ return view('admin.equipos'); });
Route::get('equipos', 'EquiposController@create');
//Agregar un equipo a la base de datos
Route::post('equipos', 'EquiposController@store');
//Lista de Equipos
Route::get('listequipos', 'EquiposController@index');
//Ver solo un equipo
Route::get('equipo/{id?}', 'EquiposController@show');
//Edición de equipo
Route::get('equipo/{id?}/edit', 'EquiposController@edit');
//Actulización para guardar en base de datos
Route::post('equipo/{id?}/edit', 'EquiposController@update');
//Borrado del equipo
Route::post('equipo/{id?}/delete', 'EquiposController@destroy');

Route::get('estados',  function(){ return view('admin.estados');      } );
Route::get('mercancias',  function(){ return view('admin.mercancias');      } );
Route::get('servicios',  function(){ return view('admin.servicios');      } );
Route::get('calendario',  function(){ return view('admin.calendario');      } )->name('add.empresa');
