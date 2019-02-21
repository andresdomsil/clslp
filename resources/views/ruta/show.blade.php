@extends('admin.layout')
@section('content')
	<div class="container col-md-8 col-md-offset-2">
		<div class="well well bs-component">
			<div class="content">
				<h2 class="header">{!! $ruta->nombre !!}</h2>
				<p><strong>Ultima Actualizaci&oacute;n</strong>: {!! $ruta->updated_at !!}</p>
			</div>
			<a href="{!! action('RutaController@edit', $ruta->id) !!}" class="btn btn-info">Editar</a>
			<a herf="{!! action('RutaController@destroy', $ruta->id) !!}" class="btn btn-default">Borrar</a>
		</div>
	</div>
@stop
