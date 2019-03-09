@extends('admin.layout')
@section('content')

<div class="container col-md-8 col-md-offset-2">
<div class = "well well bs-component">
<div class="content">

<h2 class="header">{!! $empresa->nombre !!}</h2>
<p><strong>Direccion</strong>:{!! $empresa->direccion !!}</p>
<p><strong>Nombre del Contacto </strong>:{!! $empresa->nombre_contacto !!}</p>
<p><strong>Telefono</strong>:{!! $empresa->telefono !!}</p>







<table class="table">
<thead>
<tr>
<th>Nombre</th>
</tr>
</thead>
<tbody>
@foreach($act as $Actividad)
<tr>
<td>
<a  href="{!! action('EmpresasControllerr@show',$empresa->id) !!}">
{!! $Actividad !!}</a>
</td>
<td class="actions">
                  
                    <form method="post" action="{!! action('EmpresasControllerr@destroy',$empresa->id) !!}"
                    class="pull-left">
                    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                    <div>
                    <button type="submit"  class="btn btn-sm btn-icon btn-pure btn-danger"  class="btn btn-warning"><i class="fa fa-trash" aria-hidden="true" ></i></button>
                    </div>
                    </form>
                  
                    <form method="get" action="{!! action('EmpresasControllerr@edit',$empresa->id) !!}"
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
                            

</div>
</div>
@stop