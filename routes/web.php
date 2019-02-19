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

//Mercancias
/*Route::get('mercancias',  function(){ return view('admin.mercancias');      } );*/
//Lista de Mercancias
Route::get('listmercancias', 'MercanciasController@index');
//Formulario para agregar una nueva mercancia a la base de datos
Route::get('mercancias', 'MercanciasController@create');
//Agrega la mercancia a la base de Datos
Route::post('mercancias', 'MercanciasController@store');
//Ver solo una mercancia
Route::get('mercancia/{id?}', 'MercanciasController@show');
//Edición de Mercancia
Route::get('mercancia/{id?}/edit', 'MercanciasController@edit');
//Actulización para guardar en base de datos
Route::post('mercancia/{id?}/edit', 'MercanciasController@update');
//Borrado del equipo
Route::post('mercancia/{id?}/delete', 'MercanciasController@destroy');

Route::get('servicios',  function(){ return view('admin.servicios');      } );
Route::get('calendario',  function(){ return view('admin.calendario');      } )->name('add.empresa');
