@extends('admin.layout')
@section('content')
	<div class="container col-md-8 col-md-offset-2">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h2>Certificaciones</h2>
			</div>
			<div class="panel-body ">
                <div class="form-group">
					<div class="row">
						<div class="col-md-6">
                 			<form class="navbar-form navbar-left pull rigth" role="search" method="get">
                 				<div class="form-group">
                 					<input type="text" name="search" class="form-control" placeholder="Buscar servicios" />
                 				</div>
                 				<button type="submit" class="btn btn-default">Buscar</button>
                 			</form>
                 		</div>
                 		<div class="col-md-2">
                 		</div>
                 		<div class="col-md-4">
							<a ID="Nueno" class="btn btn-info" href="{!! action('CertificacionesController@create') !!}">
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

				@if ($certificacion->isEmpty())
					<p>No hay registros.</p>
				@else 
					<table class="table table-hover table-striped">
						<thead>
							<tr>
								<th>ID</th>
								<td>Certificacion</td>
								<td>Ultima actualizaci&oacute;n</td>
							</tr>
						</thead>
						<tbody>
							@foreach($certificaciones as $certificacion)
								<tr>
									<td>{!! $certificacion->id !!}</td>				
									<td>
										<a href="{!! action('CertificacionesController@show', $certificacion->id) !!}">{!! $certificacion->nombre !!}</a>
									</td>
									<td>{!! $certificacion->updated_at !!}</td>
								</tr>
							@endforeach
						</tbody>
					</table>
				@endif
				{!! $certificacion->render() !!}
			</div>
		</div>
	</div>
@stop