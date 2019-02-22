@extends('admin.layout')
@section('content')
	<div class="container col-md-8 col-md-offset-2">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h2>Estado</h2>
			</div>
			<div class="panel-body ">
                <div class="form-group">
					<div class="row">
                        <div class="col-md-8">
                            <form class="navbar-form navbar-left pull rigth" role="search" method="get">
                                <div class="form-group">
                                    <input type="text" name="search" class="form-control" placeholder="Buscar Estados" />
                                </div>
                                <button type="submit" class="btn btn-default">Buscar</button>
                            </form>
                        </div>

							<div class="col-md-4">
								<a ID="Nueno" class="btn btn-info" href="{!! action('EstadoController@create') !!}">
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

				@if ($estado->isEmpty())
					<p>No hay registros.</p>
				@else
					<table class="table">
						<thead>
							<tr>
								<th>ID</th>
								<td>ESTADO</td>
								<td>Ultima actualizaci&oacute;n</td>
							</tr>
						</thead>
						<tbody>
							@foreach($estado as $estado)
								<tr>
									<td>{!! $estado->id !!}</td>
									<td>
										<a href="{!! action('EstadoController@show', $estado->id) !!}">{!! $estado->nombre !!}</a>
									</td>
									<td>{!! $estado->updated_at !!}</td>
								</tr>
							@endforeach
						</tbody>
					</table>
				@endif
			</div>
		</div>
	</div>
@stop
