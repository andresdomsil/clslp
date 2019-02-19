@extends('admin.layout')
@section('content')
	<div class="container col-md-8 col-md-offset-2">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h2>Equipos</h2>
			</div>

			<div class="panel-body ">
                 <div class="form-group">
                 	<div class="row">
                 		<div class="col-md-8"></div>
                 		<div class="col-md-4">
                 			<a ID="btnNuevo" class="btn btn-info btn-lg" href="{!! action('EquiposController@create') !!}">
                 				<span class="glyphicon glyphicon-check"></span>Nuevo
                 			</a>
                 		</div>
                 	</div>
                 </div>
                 @if (session('status'))
	                <div class="alert alert-success">
	                    {{ session('status') }}
	                </div>
	            @endif

				@if ($equipos->isEmpty())
					<p>No hay registros.</p>
				@else 
					<table class="table">
						<thead>
							<tr>
								<th>ID</th>
								<td>Nombre del equipo</td>
								<td>Ultima actualizaci&oacute;n</td>
							</tr>
						</thead>
						<tbody>
							@foreach($equipos as $equipo)
								<tr>
									<td>{!! $equipo->id !!}</td>				
									<td>
										<a href="{!! action('EquiposController@show', $equipo->id) !!}">{!! $equipo->nombre !!}</a>
									</td>
									<td>{!! $equipo->updated_at !!}</td>
								</tr>
							@endforeach
						</tbody>
					</table>
				@endif
			</div>
		</div>
	</div>
@stop