@extends('admin.layout')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="nav-tabs-custom">
            <div class="tab-content">
            <div class="tab-pane active" id="tab_1">

                  <div class="form-group {{ $errors->has('contacto1') ? 'has-error' : '' }}">

                      <form class = "form-horizontal" method="post">          
                 
                       <input type="hidden" value="{!! csrf_token() !!}" name="_token">
                      <h3 class="text-center">Registrar una Empresa</h3>
                      <hr>
                                 <label>Nombre de la Empresa</label>
                                 <input placeholder="Name" name="name" type="text" class="form-control" value="{!! $empresa->nombre !!}">
                               
                                 <label >Dirreción</label>
                                 <input  placeholder="Address" name="ad" type="text" class="form-control" value="{!! $empresa-> direccion !!}">

                                 <label >Nombre del Contacto</label>
                                 <input  placeholder="Name of the principal contact" name="name_c" type="text" class="form-control" value="{!! $empresa->nombre_contacto !!}"> 

                                 <label >Telefono</label>
                                 <input  placeholder="Phone" value="{!! $empresa->telefono !!}" name="phone" type="tel" class="form-control">

                                 <label>Email</label>
                                 <input  placeholder="emailaddress" value="{!! $empresa->email!!}" name="emailad" type="email" class="form-control">

                                 <label>Sitio Web</label>
                                 <input  placeholder="website" name="web" value="{!! $empresa->email !!}" type="text" class="form-control">

                                 <label>Cantidad Unidades</label>
                                 <input  placeholder="Values" name="values" value="{!! $empresa->cantidad_unidades !!}" type="number" class="form-control">

                                 <label>Antiguedad Unidades</label>
                                 <input  placeholder="Old Values" name="oldvalues" value="{!! $empresa->antiguedad_unidades !!}" type="text" class="form-control">
                                 <br>
                                 <input type="checkbox" name="immex"  {!! $empresa->programa_immex == 1?"checked":""!!}>Programa IMMEX <br>
                                  <br>
                                 <input type="checkbox" name="mp"  {!! $empresa->material_peligros == 1?"checked":""!!} >Materiales Peligrosos<br>
                                 <br>
                                 <label>Servicios Adicionales</label>
                                 <input  placeholder="Adittional Services" name="servadi" value="{!! $empresa->servicios_adicionales!!}" type="text" class="form-control">
                                 <br>
                                 <input type="checkbox" name="rh"  {!! $empresa->recursos_humano == 1?"checked":""!!}>Recursos Humanos<br>
                                 <br>
                                 <input type="checkbox" name="rassat"  {!! $empresa->rastero_satelital == 1?"checked":""!!} >Rastreo Satelital<br>
                                 <br>

                                 <label>Rutas Internacionales</label>
                                 <input  placeholder="International Routes" value="{!! $empresa->rutas_internacionales !!}" name="rutinter" type="text" class="form-control">
                                 <br>

                                  <input type="checkbox" name="prio"  {!! $empresa->prioridad == 1?"checked":""!!}>Prioridad<br>
                                 <br><label>Logo</label>
                                <input id="fileupload" name="myfile" type="file" />
                                <br>
                                 
                                <br>
                                <div class="form-group col-md-6 col-md-offset-3">
                          <button type="submit" class="btn btn-success btn-block">Guardar
                      </button>
                     </form>

                 </div>
</form>


            </div>
        </div>
    </div>
</div>
@stop