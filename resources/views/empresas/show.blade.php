@extends('admin.layout')
@section('content')

<div class="container col-md-8 col-md-offset-2">
<div class = "well well bs-component">
<div class="content">

<h2 class="header">{!! $empresa->nombre !!}</h2>
<p><strong>Direccion</strong>:{!! $empresa->direccion !!}</p>
<p><strong>Nombre del Contacto </strong>:{!! $empresa->nombre_contacto !!}</p>
<p><strong>Telefono</strong>:{!! $empresa->telefono !!}</p>
</div>
</div>
@stop