<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>CLSLP</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="{{ asset('assets/css/ie10-viewport-bug-workaround.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/AdminLTE.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/skins/skin-blue.min.css') }}" rel="stylesheet" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body class="hold-transition skin-blue sidebar-mini">
    <!-- Main Header -->
    <header class="main-header">
      <!-- Logo -->
        <a href="#" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini">CL</span>
            <!-- logo for regular state and mobile devices -->
             <span class="logo-lg"><b>CL</b>SLP</span>
        </a>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            @if (Route::has('login'))
              @auth
                <li><a href="{{ url('/home') }}">Home</a></li>
              @else
                <li class="active"><a href="{{ route('login') }}">Login</a></li>
              @endauth
            @endif
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
  </header>

  <div class="container">
    <br/>
    <br/>
    <br/>
    <!-- Encabezado de página / Breadcrumb -->
    <div class="row">
      <div class="col-md-12">
        <h1 class="page-header">Perfil de empresa</h1>
        <small>Información de empresa</small>
        <ol class="breadcrumb">
          <li><a href="{{ url('/') }}">Index</a></li>
          <li><a href="#">Perfil de empresa</a></li>
        </ol>
      </div>
    </div>
    <!-- Fin Encabezado de página / Breadcrumb -->

    <!-- Campos del formulario de contacto con validación de campos-->
    <div class="row">
      <!-- Columna de la izquierda -->
      <div class="col-md-3">
        <div class="col-md-12" align="center">
          <img class="img-responsive img-portfolio img-hover" src="{{url('/')}}{{ Storage::url($empresa->logo) }}">
        </div>
        <div class="col-md-12">
          <p class="text-center"><strong>{!! $empresa->nombre !!}</strong></p>
        </div>
      </div>
      <!-- Fin de Columna de la izquierda -->
      <!-- Parte central -->
      <div class="col-md-9">
        <div class="col-md-12" style="border-width: 1px 1px 0px 1px; border-style: solid; border-color: lightgrey;">
          <h3 style="text-align: center">Mi perfil</h3>
        </div>
        <!-- Inicio del div central parte de formulario información básica -->
        <div class="col-md-12" style="border-width: 0.5px 0.5px 0px 0.5px; border-style: solid; border-color: lightgrey; background: #f1f3f6;">
          <div class="col-md-10 col-md-offset-2">
            <div class="control-group form-group">
              <div class="controls">
                <br />
                <div class="row">
                  <div class="col-md-3">
                    <span style="text-align: right; font-weight: bold;">Dirección:</span>
                  </div>
                  <div class="col-md-9">
                    {!! $empresa->direccion !!}
                  </div>
                </div>

                <br/>
                <div class="row">
                  <div class="col-md-3">
                    <span style="text-align: right; font-weight: bold;">Teléfono:</span>
                  </div>
                  <div class="col-md-9">
                    {!! $empresa->telefono !!}
                  </div>
                </div>

                <br/>
                <div class="row">
                  <div class="col-md-3">
                    <span style="text-align: right; font-weight: bold;">Correo Electrónico:</span>
                  </div>
                  <div class="col-md-9">
                    <a href="mailto: {!! $empresa->email !!}">{!! $empresa->email !!}</a>
                  </div>
                </div>

                <br/>
                <div class="row">
                  <div class="col-md-3">
                    <span style="text-align: right; font-weight: bold;">Sitio Web:</span>
                  </div>
                  <div class="col-md-9">
                    <a href=" {!! $empresa->web !!}" target="_blank">{!! $empresa->web !!}</a>
                  </div>
                </div>

                <br/>
                <div class="row">
                  <div class="col-md-3">
                    <span style="text-align: right; font-weight: bold;">Nombre del Contacto:</span>
                  </div>
                  <div class="col-md-9">
                    {!! $empresa->nombre_contacto !!}
                  </div>
                </div>

                <br/>
                <div class="row">
                  <div class="col-md-3">
                    <span style="text-align: right; font-weight: bold;">Cantidad de Unidades:</span>
                  </div>
                  <div class="col-md-3">
                    {!! $empresa->cantidad_unidades !!}
                  </div>
                  <div class="col-md-3">
                    <span style="text-align: right; font-weight: bold;">Antigüedad de Unidades:</span>
                  </div>
                  <div class="col-md-3">
                    {!! $empresa->antiguedad_unidades !!}
                  </div>
                </div>

                <br/>
                <div class="row">
                  <div class="col-md-3">
                     <input type="checkbox" {!! $empresa->programa_immex == 1?"checked":""!!} />&nbsp;Programa IMMEX
                  </div>
                  <div class="col-md-3">
                     <input type="checkbox" {!! $empresa->material_peligros == 1?"checked":""!!} />&nbsp;Materiales Peligrosos
                  </div>
                  <div class="col-md-3">
                    <input type="checkbox" {!! $empresa->recursos_humano == 1?"checked":""!!} />&nbsp;Recursos Humanos
                  </div>
                  <div class="col-md-3">
                    <input type="checkbox" {!! $empresa->rastreo_satelital == 1?"checked":""!!} />&nbsp;Rastreo Satelital
                  </div>
                </div>

                <br/>
                <div class="row">
                  <div class="col-md-3">
                    <span style="text-align: right; font-weight: bold;">Servicios adicionales:</span>
                  </div>
                  <div class="col-md-9">
                     {!! $empresa->servicios_adicionales !!}
                  </div>
                </div>

                <br/>
                <div class="row">
                  <div class="col-md-3">
                    <span style="text-align: right; font-weight: bold;">Rutas Internacionales:</span>
                  </div>
                  <div class="col-md-9">
                     {!! $empresa->rutas_internacionales !!}
                  </div>
                </div>
                <p class="help-block"></p>
              </div>
            </div>
          </div>
        </div>
        <!-- Fin del div central parte de formulario información básica -->

        <!-- Botones formulario -->
        <div class="col-md-12 container allFormButtons">
          <br />
          <div class="col-md-4">
            <div class="form-group">
              <a href="{{ url('/') }}" class="btn btn-block btn-danger">Regresar</a>
            </div>
          </div>
        &nbsp;
        </div>
      <!-- Fin botones formulario -->
      </div>  
      <!-- Fin del div de parte central -->
    </div>
    <!-- Fin Campos del formulario de contacto con validación de campos -->
    &nbsp;
    <hr>
    <!-- Footer -->
    <footer>
      <div class="row">
        <div class="col-lg-12 footer-align">
          <strong>Copyright &copy; 2019 <a href="#">Sedely</a>.</strong> Todos los derechos reservados.
        </div>
      </div>
    </footer>
  </div>

  <!-- Bootstrap core JavaScript ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
  <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
</body>
</html>