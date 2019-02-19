@extends('admin.layout')
@section('content')
	<div class="container col-md-8 col-md-offset-2">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h2>Equipos</h2>
			</div>
			@if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

			@if ($equipos->isEmpty())
				<p>No hay tickets.</p>
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
@stop