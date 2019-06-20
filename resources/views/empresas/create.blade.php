@extends('admin.layout')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="nav-tabs-custom">
            <div class="tab-content">
                <div class="tab-pane active" id="tab_1">
                    <form class = "form-horizontal" role="form" method="post" enctype="multipart/form-data">
                        <input type="hidden" value="{!! csrf_token() !!}" name="_token">
                         @foreach ($errors->all() as $error)
                            <p class="alert alert-danger">{{ $error }}</p>
                        @endforeach
                        @if (session('status'))
                            <div class="alert alert-success">{{ session('status') }}</div>
                        @endif
                        <hr />
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Nombre de la Empresa</label>
                            <div class="col-lg-10">
                                <input placeholder="Nombre de la empresa" name="name" type="text" class="form-control" required />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Dirreción</label>
                            <div class="col-lg-4">
                                <input  placeholder="Dirección de la empresa" name="ad" type="text" class="form-control" required />
                            </div>
                            <label class="col-lg-2 control-label">Nombre del Contacto</label>
                            <div class="col-lg-4">
                                <input placeholder="Nombre del contacto principal" name="name_c" type="text" class="form-control" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Teléfono</label>
                            <div class="col-lg-4">
                                <input type="tel" placeholder="Teléfono" name="phone" class="form-control" required/>
                            </div>
                            <label class="col-lg-2 control-label">Correo Electrónico:</label>
                            <div class="col-lg-4">
                                <input placeholder="Correo Electrónico" name="emailad" type="email" class="form-control" required />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Sitio Web</label>
                            <div class="col-lg-4">
                                <input placeholder="Sitio Web" name="web" type="text" class="form-control" required />
                            </div>
                            <label class="col-lg-2 control-label">Cantidad Unidades</label>
                            <div class="col-lg-4">
                                <input placeholder="Cantidad de Unidades" name="values" type="number" class="form-control" required />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Antigüedad Unidades</label>
                            <div class="col-lg-4">
                                <input placeholder="Antigüedad de Unidades" name="oldvalues" type="number" class="form-control" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-3">
                                <input type="checkbox" name="immex" />&nbsp;Programa IMMEX
                            </div>
                            <div class="col-lg-3">
                                <input type="checkbox" name="mp" />&nbsp;Materiales Peligrosos
                            </div>
                            <div class="col-lg-3">
                                <input type="checkbox" name="rh" />&nbsp;Recursos Humanos
                            </div>
                            <div class="col-lg-3">
                                <input type="checkbox" name="rassat" />&nbsp;Rastreo Satelital
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Servicios Adicionales</label>
                            <div class="col-lg-4">
                                <input  placeholder="Servicios Adicionales" name="servadi" type="text" class="form-control" required />
                            </div>
                            <label class="col-lg-2 control-label">Rutas Internacionales</label>
                            <div class="col-lg-4">
                                <input placeholder="Rutas Internacionales" name="rutinter" type="text" class="form-control" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-4"></div>
                            <div class="col-lg-4">
                                <input type="checkbox" name="prio" />Prioridad
                            </div>
                            <div class="col-lg-4"></div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Logo</label>
                            <div class="col-lg-4">
                                <input id="myfile" name="myfile" type="file" required />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-3"></div>
                            <div class="col-lg-3">
                                <button type="submit" class="btn btn-success btn-block">Guardar</button>
                            </div>
                            <div class="col-lg-3">
                                <a href="{!! action('EmpresasController@index') !!}" class="btn btn-default btn-block">Salir</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
