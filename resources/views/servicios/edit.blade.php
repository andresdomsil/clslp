@extends('admin.layout')
@section('content')
	<section class="content-header">
      <h1>
        Servicios
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Servicios</li>
      </ol>
    </section>
    <br />

    <!-- Main content -->
    <section class="content">
    	<form class="form-horizontal" role="form" method="post">
            @foreach ($errors->all() as $error)
            <p class="alert alert-danger">{{ $error }}</p>
            @endforeach

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
            <input type="hidden" name="id" value="{!! $servicio->id !!}">
    		<div class="form-group">
    			<label class="col-lg-2 control-label">Nombre del Servicio:</label>
    			<div class="col-lg-10">
    				<input type="text" name="nombre" id="nombre" class="form-control" placeholder="Servicio" value="{!! $servicio->nombre !!}" required />
    			</div>
    		</div>

    		<div class="form-group">
    			<div class="col-lg-offset-2 col-lg-10">
    				<button type="submit" class="btn btn-default">Actualizar</button>
    				<!--<button type=reset" class="btn btn-default">Cancelar</button>-->
                    <a href="{!! action('ServiciosController@index') !!}" class="btn btn-default">Cancelar</a>
    			</div>
    		</div>
    	</form>
    </section>
@stop