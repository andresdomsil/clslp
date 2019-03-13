@extends('admin.layout')
@section('content')
	<div class="container col-md-8 col-md-offset-2">
		<div class="well well bs-component">
			<div class="content">
				<h2 class="header">{!! $estado->nombre !!}</h2>
				<p><strong>Ultima Actualizaci&oacute;n</strong>: {!! $estado->updated_at !!}</p>
			</div>
			<a href="{!! action('EstadoController@edit', $estado->id) !!}" class="btn btn-info">Editar</a>
			<a href="{!! action('EstadoController@destroy', $estado->id) !!}" class="btn btn-default">Borrar</a>
		</div>
	</div>
@stop
