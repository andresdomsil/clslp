@extends('admin.layout')
@section('content')
<section class="content-header">
    <h1>Registro de empresas</h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Edición de empresa</li>
    </ol>
</section>
<br/>
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
                                <input placeholder="Nombre de la empresa" name="name" type="text" class="form-control" value="{!! $empresa->nombre !!}" required />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Dirreción</label>
                            <div class="col-lg-4">
                                <input  placeholder="Dirección de la empresa" name="ad" type="text" class="form-control" value="{!! $empresa-> direccion !!}" required />
                            </div>
                            <label class="col-lg-2 control-label">Nombre del Contacto</label>
                            <div class="col-lg-4">
                                <input placeholder="Nombre del contacto principal" name="name_c" type="text" class="form-control" value="{!! $empresa->nombre_contacto !!}" required/> 
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Teléfono</label>
                            <div class="col-lg-4">
                                <input type="tel" placeholder="Teléfono" value="{!! $empresa->telefono !!}" name="phone" class="form-control" required/>
                            </div>
                            <label class="col-lg-2 control-label">Correo Electrónico:</label>
                            <div class="col-lg-4">
                                <input placeholder="Correo Electrónico" value="{!! $empresa->email!!}" name="emailad" type="email" class="form-control" required />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Sitio Web</label>
                            <div class="col-lg-4">
                                <input placeholder="Sitio Web" name="web" value="{!! $empresa->web !!}" type="text" class="form-control" required />
                            </div>
                            <label class="col-lg-2 control-label">Cantidad Unidades</label>
                            <div class="col-lg-4">
                                <input placeholder="Cantidad de Unidades" name="values" value="{!! $empresa->cantidad_unidades !!}" type="number" class="form-control" required />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Antigüedad Unidades</label>
                            <div class="col-lg-4">
                                <input placeholder="Antigüedad de Unidades" name="oldvalues" value="{!! $empresa->antiguedad_unidades !!}" type="number" class="form-control" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-3">
                                <input type="checkbox" name="immex" {!! $empresa->programa_immex == 1?"checked":""!!} />&nbsp;Programa IMMEX 
                            </div>
                            <div class="col-lg-3">
                                <input type="checkbox" name="mp"  {!! $empresa->material_peligros == 1?"checked":""!!} />&nbsp;Materiales Peligrosos
                            </div>
                            <div class="col-lg-3">
                                <input type="checkbox" name="rh"  {!! $empresa->recursos_humano == 1?"checked":""!!} />&nbsp;Recursos Humanos
                            </div>
                            <div class="col-lg-3">
                                <input type="checkbox" name="rassat" {!! $empresa->rastero_satelital == 1?"checked":""!!} />&nbsp;Rastreo Satelital
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Servicios Adicionales</label>
                            <div class="col-lg-4">
                                <input  placeholder="Servicios Adicionales" name="servadi" value="{!! $empresa->servicios_adicionales!!}" type="text" class="form-control" required />
                            </div>
                            <label class="col-lg-2 control-label">Rutas Internacionales</label>
                            <div class="col-lg-4">
                                <input placeholder="Rutas Internacionales" value="{!! $empresa->rutas_internacionales !!}" name="rutinter" type="text" class="form-control" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-4"></div>
                            <div class="col-lg-4">
                                <input type="checkbox" name="prio"  {!! $empresa->prioridad == 1?"checked":""!!} />Prioridad
                            </div>
                            <div class="col-lg-4"></div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Logo</label>
                            <div class="col-lg-4">
                                <img width="100px" src="{{url('/')}}{{ Storage::url($empresa->logo) }}"/>
                                <input id="myfile" name="myfile" type="file"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-3"></div>
                            <div class="col-lg-3">
                                <button type="submit" class="btn btn-success btn-block">Guardar</button>
                            </div>
                            <div class="col-lg-3">
                                <a href="{!! action('EmpresasController@index') !!}" class="btn btn-default btn-block">Cancelar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop