@extends('layouts.public')
@section('content')
<div class="container">
    <h1>Empresas</h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i>&nbsp;Home</a></li>
        <li class="active">Empresas</li>
    </ol>
    
    <br />
    <!--
    <section class="content-header">
        <a class="btn btn-icon btn-pure btn-primary" href="{{ route('add.empresa') }}"><i class="fa fa-plus"></i> Agregar empresa</a>
    </section>-->

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Empresas</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="tablalista" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Nombre</th>
                  <th>Dirección</th>
                  <th>Contacto</th>
                  <th>Tel.</th>
                  <th>Correo</th>
                  <th>Web</th>
                  <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>01</td>
                  <td>
                      Empresa de prueba
                  </td>
                  <td>Calle 01, SLP</td>
                  <td>Personal de contacto</td>
                  <td>4620723</td>
                  <td>empresa@outlook.com</td>
                  <td>empresa.com</td>
                  <td class="actions">
                    
                    <button class="btn btn-sm btn-icon btn-pure btn-success"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                    <button class="btn btn-sm btn-icon btn-pure btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                  </td>
                </tr>
                <tr>
                  <td>01</td>
                  <td>
                      Empresa 2
                  </td>
                  <td>Calle 02, SLP</td>
                  <td>Personal de contacto</td>
                  <td>4620983</td>
                  <td>empresa2@outlook.com</td>
                  <td>empresa2.com</td>
                  <td class="actions">
                    
                    <button class="btn btn-sm btn-icon btn-pure btn-success"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                    <button class="btn btn-sm btn-icon btn-pure btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                  </td>
                </tr>
                <tr>
                  <td>03</td>
                  <td>
                      Empresa 3
                  </td>
                  <td>Calle 03, SLP</td>
                  <td>Personal de contacto</td>
                  <td>4780723</td>
                  <td>empresa3@outlook.com</td>
                  <td>empresa3.com</td>
                  <td class="actions">
                    
                    <button class="btn btn-sm btn-icon btn-pure btn-success"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                    <button class="btn btn-sm btn-icon btn-pure btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                  </td>
                </tr>
                <tr>
                  <td>04</td>
                  <td>
                      Empresa4
                  </td>
                  <td>Calle 04, SLP</td>
                  <td>Personal de contacto</td>
                  <td>4753723</td>
                  <td>empres3a@outlook.com</td>
                  <td>empresa4.com</td>
                  <td class="actions">
                    
                    <button class="btn btn-sm btn-icon btn-pure btn-success"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                    <button class="btn btn-sm btn-icon btn-pure btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                  </td>
                </tr>


                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
</div>
@endsection
