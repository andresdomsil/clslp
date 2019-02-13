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

    <!-- Main content -->
    <section class="content">
      <div class="row">
         <div class="col-md-6">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h2 class="box-title text-uppercase"><strong>PRINCIPAL ACTIVIDAD ECONÓMICA</strong></h2>
            </div>
            
                <div class="box-body">
                    <div class="form-group {{ $errors->has('name_padlock') ? 'has-error' : '' }}">
                        <label  for="name_padlock">Nombre</label>
                        <input class="form-control" name="name_padlock" placeholder="Nombre" value="{{ old('name_padlock') }}">
                        {!! $errors->first('name_padlock', '<span class="help-block">:message</span>') !!}
                    </div>

                    <button class="btn btn-block btn-pure btn-primary" >Guardar</button>
                </div>
        </div>
        
    </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
@stop
