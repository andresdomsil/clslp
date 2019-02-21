@extends('admin.layout')
@section('content')
	<div class="container col-md-8 col-md-offset-2">
		<div class="well well bs-component">
			<div class="content">
				<h2 class="header">{!! $sucursal->nombre !!}</h2>
				<p><strong>Ultima Actualizaci&oacute;n</strong>: {!! $sucursal->updated_at !!}</p>
			</div>
			<a href="{!! action('SucursalController@edit', $sucursal->id) !!}" class="btn btn-info">Editar</a>
			<a herf="{!! action('SucursalController@destroy', $sucursal->id) !!}" class="btn btn-default">Borrar</a>
		</div>
	</div>
@stop
