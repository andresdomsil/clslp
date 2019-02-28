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
<th>Nombre del Contacto</th>
<th>Telefono</th>
</tr>
</thead>
<tbody>
@foreach($empresas as $empresa)
<tr>
<td>{!! $empresa -> nombre !!}</td>
<td>{!! $empresa -> direccion !!}</td>
<td>{!! $empresa -> nombre_contacto !!}</td>
<td>{!! $empresa -> telefono !!}</td>
</tr>
@endforeach
</tbody>
</table>
@endif
</div>
</div>
@stop