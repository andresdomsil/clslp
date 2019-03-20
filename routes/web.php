<?php

//Home
Route::get('/', 'HomeController@index');
Route::get('perfil/{id}', 'HomeController@show');

Route::get('home', 'EmpresasController@index');
//Login, registro, etc...
Auth::routes();

//Equipos
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

//Mercancias
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
Route::get('listactividades', 'ActividadesController@index');
Route::get('Actividades', 'ActividadesController@create');
Route::post('Actividades', 'ActividadesController@store');
Route::get('Actividades/{id?}', 'ActividadesController@show');
Route::get('Actividades/{id?}/edit', 'ActividadesController@edit');
Route::post('Actividades/{id?}/edit', 'ActividadesController@update');
Route::get('Actividades/{id?}/delete', 'ActividadesController@destroy');

//Empresas
Route::get('listaempresas', 'EmpresasController@index');
Route::get('/newempresa','EmpresasController@create') -> name('nueva');
Route::post('/newempresa','EmpresasController@store');
Route::get('/empresas/{id?}','EmpresasController@show')-> name('test');
Route::get('/empresas/{id?}/edit','EmpresasController@edit');
Route::post('/empresas/{id?}/edit','EmpresasController@update');
Route::get('/empresas/{id?}/delete','EmpresasController@destroy');

//Certificaciones
//Lista de Certificaciones
Route::get('listcertificaciones', 'CertificacionesController@index');
Route::get('certificaciones', 'CertificacionesController@create');
Route::post('certificaciones', 'CertificacionesController@store');
Route::get('certificaciones/{id?}', 'CertificacionesController@show');
Route::get('certificaciones/{id?}/edit', 'CertificacionesController@edit');
Route::post('certificaciones/{id?}/edit', 'CertificacionesController@update');
Route::get('certificaciones/{id?}/delete', 'CertificacionesController@destroy');
