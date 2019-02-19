@extends('admin.layout')
@section('content')
	<div class="container col-md-8 col-md-offset-2">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h2>mercancias</h2>
			</div>
			<div class="panel-body ">
                <div class="form-group">
					<div class="row">
						<div class="col-md-8"></div>
							<div class="col-md-4">
								<a ID="Nueno" class="btn btn-info" href="{!! action('MercanciasController@create') !!}">
									<span class="glyphicon glyphicon-check"></span>Nuevo
								</a>
							</div>
						</div>
					</div>
				</div>
				@if (session('status'))
                	<div class="alert alert-success">
                    	{{ session('status') }}
                	</div>
            	@endif

				@if ($mercancias->isEmpty())
					<p>No hay registros.</p>
				@else 
					<table class="table">
						<thead>
							<tr>
								<th>ID</th>
								<td>Nombre del mercancia</td>
								<td>Ultima actualizaci&oacute;n</td>
							</tr>
						</thead>
						<tbody>
							@foreach($mercancias as $mercancia)
								<tr>
									<td>{!! $mercancia->id !!}</td>				
									<td>
										<a href="{!! action('MercanciasController@show', $mercancia->id) !!}">{!! $mercancia->nombre !!}</a>
									</td>
									<td>{!! $mercancia->updated_at !!}</td>
								</tr>
							@endforeach
						</tbody>
					</table>
				@endif
			</div>
		</div>
	</div>
@stop