@extends('admin.layout')
@section('content')
	<div class="container col-md-8 col-md-offset-2">
		<div class="well well bs-component">
			<div class="content">
				<h2 class="header">{!! $equipo->nombre !!}</h2>
				<p><strong>Ultima Actualizaci&oacute;n</strong>: {!! $equipo->updated_at !!}</p>
			</div>
			<a href="{!! action('EquiposController@edit', $equipo->id) !!}" class="btn btn-info">Editar</a>
			<a herf="{!! action('EquiposController@destroy', $equipo->id) !!}" class="btn btn-default">Borrar</a>
		</div>
	</div>
@stop