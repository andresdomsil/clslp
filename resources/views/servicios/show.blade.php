@extends('admin.layout')
@section('content')
	<div class="container col-md-8 col-md-offset-2">
		<div class="well well bs-component">
			<div class="content">
				<h2 class="header">{!! $servicio->nombre !!}</h2>
				<p><strong>Ultima Actualizaci&oacute;n</strong>: {!! $servicio->updated_at !!}</p>
			</div>
			<a href="{!! action('ServiciosController@edit', $servicio->id) !!}" class="btn btn-info">Editar</a>
			<a href="{!! action('ServiciosController@destroy', $servicio->id) !!}" class="btn btn-default">Borrar</a>
		</div>
	</div>
@stop