@extends('admin.layout')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs" id="tabMenu">
              <li class="active"><a href="#tab_1" data-toggle="tab" style="font-size: 16px; font-weight: 600;">Empresa</a></li> 
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tab_1">
                  <form action="#" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                      <input type="hidden" value="F" name="pfopm">
                      <h3 class="text-center">Datos</h3>
                      <hr>
                      <div class=row>
                        <div class="col-md-6">
                            <div class="form-group {{ $errors->has('nombre') ? 'has-error' : '' }}">
                                <label for="nombre">Nombre</label>
                                <input value="{{ old('nombre') }}" placeholder="Nombre empresa" name="nombre" type="text" class="form-control">
                                {!! $errors->first('nombre', '<span class="help-block">:message</span>') !!}
                            </div>

                            <div class="form-group {{ $errors->has('apellidop') ? 'has-error' : '' }}">
                                <label for="apellidop">Direccion</label>
                                <input value="{{ old('apellidop') }}" placeholder="calle 1 #123" name="apellidop" type="text" class="form-control">
                                {!! $errors->first('apellidop', '<span class="help-block">:message</span>') !!}
                            </div>

                            <div class="form-group {{ $errors->has('apellidom') ? 'has-error' : '' }}">
                                <label for="apellidom">Nombre del contacto</label>
                                <input value="{{ old('apellidom') }}" placeholder="Lic. Juan Perez" name="apellidom" type="text" class="form-control">
                                {!! $errors->first('apellidom', '<span class="help-block">:message</span>') !!}
                            </div>

                            <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                                <label for="email">Correo Electrónico</label>
                                <input value="{{ old('email') }}" placeholder="tu@email.com" name="email" type="email" class="form-control">
                                {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
                            </div>

                            <div class="form-group {{ $errors->has('estado_id') ? 'has-error' : '' }}">
                                <label for="estado_id">Sucursales (Estados)</label>
                                <select class="form-control select2" name="estado_id" style="width: 100%;">
                                    <option value="">Seleccione el Estado</option>
                                    
                                </select>
                                {!! $errors->first('estado_id', '<span class="help-block">:message</span>') !!}
                            </div>
                            <div class="form-group {{ $errors->has('estado_id') ? 'has-error' : '' }}">
                                <label for="estado_id">Rutas nacionales</label>
                                <select class="form-control select2" name="estado_id" style="width: 100%;">
                                    <option value="">Seleccione el Estado</option>
                                    
                                </select>
                                {!! $errors->first('estado_id', '<span class="help-block">:message</span>') !!}
                            </div>

                            <div class="form-group {{ $errors->has('direccion') ? 'has-error' : '' }}">
                                <label for="direccion">Telefono</label>
                                <input value="{{ old('direccion') }}" placeholder="Calle, Número, Colonia, Ciudad" name="direccion" type="text" class="form-control">
                                {!! $errors->first('direccion', '<span class="help-block">:message</span>') !!}
                            </div>

                            
                            <div class="form-group {{ $errors->has('nombre_contacto') ? 'has-error' : '' }}">
                                <label for="nombre_contacto">Dirección Web</label>
                                <input value="{{ old('nombre_contacto') }}" placeholder="www.empresa.com" name="nombre_contacto" type="text" class="form-control">
                                {!! $errors->first('nombre_contacto', '<span class="help-block">:message</span>') !!}
                            </div>

                        </div>
                        <div class="col-md-6">

                            
                            <div class="form-group {{ $errors->has('contacto1') ? 'has-error' : '' }}">
                                <label for="contacto1">cantidad de unidades</label>
                                <input value="{{ old('contacto1') }}" placeholder="" name="contacto1" type="text" class="form-control">
                                {!! $errors->first('contacto1', '<span class="help-block">:message</span>') !!}
                            </div>

                            <div class="form-group {{ $errors->has('contacto2') ? 'has-error' : '' }}">
                                <label for="contacto2">Antigüedad promedio de las unidades</label>
                                <input value="{{ old('contacto2') }}" placeholder="" name="contacto2" type="text" class="form-control">
                                {!! $errors->first('contacto2', '<span class="help-block">:message</span>') !!}
                            </div>

                            <div class="form-group {{ $errors->has('estado_id') ? 'has-error' : '' }}">
                                <label for="estado_id">Tipos de equipos</label>
                                <select class="form-control select2" name="estado_id" style="width: 100%;">
                                    <option value="">Seleccione los tipos</option>
                                    
                                </select>
                                {!! $errors->first('estado_id', '<span class="help-block">:message</span>') !!}
                            </div>
                            
                            
                            <div class="form-group {{ $errors->has('estado_id') ? 'has-error' : '' }}">
                                <label for="estado_id">Tipos de mercancia</label>
                                <select class="form-control select2" name="estado_id" style="width: 100%;">
                                    <option value="">Seleccione los tipos</option>
                                    
                                </select>
                                {!! $errors->first('estado_id', '<span class="help-block">:message</span>') !!}
                            </div>

                            <div class="form-group {{ $errors->has('estado_id') ? 'has-error' : '' }}">
                                <label for="estado_id">Certificaciones</label>
                                <select class="form-control select2" name="estado_id" style="width: 100%;">
                                    <option value="">Seleccione las ceritificaciones</option>
                                    
                                </select>
                                {!! $errors->first('estado_id', '<span class="help-block">:message</span>') !!}
                            </div>

                            <div class="form-group {{ $errors->has('estado_id') ? 'has-error' : '' }}">
                                <label for="estado_id">Servicios adicionales</label>
                                <select class="form-control select2" name="estado_id" style="width: 100%;">
                                    <option value="">Seleccione los servicios</option>
                                    
                                </select>
                                {!! $errors->first('estado_id', '<span class="help-block">:message</span>') !!}
                            </div>

                            <div class="form-group {{ $errors->has('estado_id') ? 'has-error' : '' }}">
                                <label for="estado_id">Rutas internacionales</label>
                                <select class="form-control select2" name="estado_id" style="width: 100%;">
                                    <option value="">Seleccione las rutas</option>
                                    
                                </select>
                                {!! $errors->first('estado_id', '<span class="help-block">:message</span>') !!}
                            </div>

                        </div>
                        
                    </div>
                    <hr>
                    <hr>
                      
                      <div class="form-group col-md-6 col-md-offset-3">
                          <button type="submit" class="btn btn-success btn-block">Guardar empresa
                      </button>
                      </div>
                    </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop