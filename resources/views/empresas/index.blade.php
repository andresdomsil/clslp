@extends('admin.layout')
@section('content')
<div class="container col-md-12">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h2>Empresas</h2>
		</div>
		<div class="panel-body ">
			<div class="form-group">
				<div class="row">
					<div class="col-md-8">
						<form class="navbar-form navbar-left pull rigth" role="search" method="get">
							<div class="form-group">
								<div class="col-md-6">
									<input type="text" name="search" class="form-control" placeholder="Buscar empresa" />
								</div>
							</div>
							<button type="submit" class="btn btn-default">Buscar</button>
						</form>
					</div>
					<div class="col-md-4">
						<a ID="Nueno" class="btn btn-info" href="{!! action('EmpresasController@create') !!}">
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
		@if($empresas->isEmpty())
		<p>No hay Empresas.</p>
		@else
		<div class="table-responsive">
			<table class="table table-hover table-striped">
				<thead>
					<tr>
						<th>Nombre</th>
						<th>Dirección</th>
						<th>Contacto</th>
						<th>Teléfono</th>
						<th>Correo Electrónico</th>
						<th>WEB</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody>
					@foreach($empresas as $empresa)
					<tr>
						<td>{!! $empresa -> nombre !!}</td>
						<td>{!! $empresa -> direccion !!}</td>
						<td>{!! $empresa -> nombre_contacto !!}</td>
						<td>{!! $empresa -> telefono !!}</td>
						<td>{!! $empresa -> email !!}</td>
						<td>{!! $empresa -> web !!}</td>
						<td class="actions">
							<a class="btn btn-sm btn-icon btn-pure btn-success" href="{!! action('EmpresasController@edit', $empresa -> id) !!}" ><i class="fa fa-pencil" aria-hidden="true"></i></a>
							<a class="btn btn-sm btn-icon btn-pure btn-danger" href="{!! action('EmpresasController@destroy', $empresa -> id) !!}"><i class="fa fa-trash" aria-hidden="true"></i></a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			@endif
		</div>
	</div>
</div>

@stop