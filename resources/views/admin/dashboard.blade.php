@extends('admin.layout')
@section('content')
<div class="container col-md-8 col-md-offset-2"
<div class="panel-heading">
<h2>Empresas</h2>
</div>
@if($empresas->isEmpty())
<p>No hay Empresas.</p>
@else
<table class="table">
<thead>
<tr>
<th>Nombre</th>
<th>Dirección</th>
<th>Contacto</th>
<th>Telefono</th>
<th>Correo</th>
<th>WEB</th>
<th>Acciones</th>
</tr>
</thead>
<tbody>
@foreach($empresas as $empresa)
<tr>
<td>
<a  href="{!! action('EmpresasControllerr@show',$empresa->id) !!}">
{!! $empresa -> nombre !!}</a>
</td>
<td>{!! $empresa -> direccion !!}</td>
<td>{!! $empresa -> nombre_contacto !!}</td>
<td>{!! $empresa -> telefono !!}</td>
<td>{!! $empresa -> email !!}</td>
<td>{!! $empresa -> web !!}</td>
<td class="actions">
                  
                    <form method="post" action="{!! action('EmpresasControllerr@destroy',$empresa->id) !!}"
                    class="pull-left">
                    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                    <div>
                    <button type="submit"  class="btn btn-sm btn-icon btn-pure btn-danger"  class="btn btn-warning"><i class="fa fa-trash" aria-hidden="true" ></i></button>
                    </div>
                    </form>
                  
                    <form method="post" action="{!! action('EmpresasControllerr@edit',$empresa->id) !!}"
                    class="pull-left">
                    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                    <div>
                    <button type="submit"  class="btn btn-sm btn-icon btn-pure btn-success"  class="btn btn-pencil"><i class="fa fa-pencil" aria-hidden="true" ></i></button>
                    </div>
                    </form>
                  
                  </td>
</tr>
@endforeach
</tbody>
</table>
@endif  
<button class="btn btn-sm btn-icon btn-pure btn-success" onclick="window.location='{{ route("nueva") }}'" class="btn btn-default">Nueva Empresa<i class="fa fa-pencil" aria-hidden="true" ></i></button>      
</div>
</div>
@stop