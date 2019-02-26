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
Route::get('equipo/{id?}/delete', 'EquiposController@destroy');

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
//Borrado del mercancia
Route::get('mercancia/{id?}/delete', 'MercanciasController@destroy');

//Servicios
/*Route::get('servicios',  function(){ return view('admin.servicios');      } );*/
//Lista de Servicios
Route::get('listservicios', 'ServiciosController@index');
//Formulario para agregar una nueva servicio a la base de datos
Route::get('servicios', 'ServiciosController@create');
//Agrega la servicio a la base de Datos
Route::post('servicios', 'ServiciosController@store');
//Ver solo una servicio
Route::get('servicio/{id?}', 'ServiciosController@show');
//Edición de servicio
Route::get('servicio/{id?}/edit', 'ServiciosController@edit');
//Actulización para guardar en base de datos
Route::post('servicio/{id?}/edit', 'ServiciosController@update');
//Borrado del servicio
Route::get('servicio/{id?}/delete', 'ServiciosController@destroy');

//Sucursales
//Lista de Sucursales
Route::get('listsucursales', 'SucursalController@index');
//Formulario para agregar nueva sucursal
Route::get('sucursales', 'SucursalController@create');
//Agrega la sucursal a la base de Datos
Route::post('sucursales', 'SucursalController@store');
//Ver solo un sucursal
Route::get('sucursales/{id?}', 'SucursalController@show');
//Edición de sucursales
Route::get('sucursales/{id?}/edit', 'SucursalController@edit');
//Actulización para guardar en base de datos
Route::post('sucursales/{id?}/edit', 'SucursalController@update');
//Borrado de la sucursal
Route::get('sucursales/{id?}/delete', 'SucursalController@destroy');

//Rutas
//Lista de Rutas
Route::get('listruta', 'RutaController@index');
//Formulario para agregar nuevas rutas
Route::get('ruta', 'RutaController@create');
//Agrega las rutas a la base de Datos
Route::post('ruta', 'RutaController@store');
//Ver solo una ruta
Route::get('ruta/{id?}', 'RutaController@show');
//Edición de rutas
Route::get('ruta/{id?}/edit', 'RutaController@edit');
//Actulización para guardar en base de datos
Route::post('ruta/{id?}/edit', 'RutaController@update');
//Borrado de rutas
Route::get('ruta/{id?}/delete', 'RutaController@destroy');

//Estados
//Lista de Estados
Route::get('listestado', 'EstadoController@index');
//Formulario para agregar nuevos estados
Route::get('estado', 'EstadoController@create');
//Agrega los estados a la base de Datos
Route::post('estado', 'EstadoController@store');
//Ver solo un estado
Route::get('estado/{id?}', 'EstadoController@show');
//Edición de estado
Route::get('estado/{id?}/edit', 'EstadoController@edit');
//Actulización para guardar en base de datos
Route::post('estado/{id?}/edit', 'EstadoController@update');
//Borrado de estado
Route::get('estado/{id?}/delete', 'EstadoController@destroy');

Route::get('calendario',  function(){ return view('admin.calendario');      } )->name('add.empresa');

//Actividades
//Seleccionar Empresa
Route::get('/act','ActividadesController@create');
Route::post('/actdash','ActividadesController@store');
//Muestra Informacion de la empresa seleccionada con actividades
Route::get('/actdash/{id?}','ActController@show');

//Empresas
//Nueva Empresa
Route::get('/newempresa','EmpresasControllerr@create');

//Certificaciones
//Lista de Certificaciones
Route::get('listcertificacion', 'CertificacionesController@index');
Route::get('certificaciones', 'CertificacionesController@create');
Route::post('certificaciones', 'CertificacionesController@store');
Route::get('certificaciones/{id?}', 'CertificacionesController@show');
Route::get('certificaciones/{id?}/edit', 'CertificacionesController@edit');
Route::post('certificaciones/{id?}/edit', 'CertificacionesController@update');
Route::get('certificaciones/{id?}/delete', 'CertificacionesController@destroy');
