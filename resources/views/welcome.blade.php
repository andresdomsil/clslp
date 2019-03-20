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
      <div class="panel-heading ">
        <h2>Empresas</h2>
        <div class="form-group">
          <div class="row">
            <div class="col-md-6">
              <form class="navbar-form navbar-left pull rigth" role="search" method="get">
                <div class="form-group">
                  <input type="text" name="search" class="form-control" placeholder="Buscar empresas asociadas"  />
                </div>
                <button type="submit" class="btn btn-default">Buscar</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- Main component for a primary marketing message or call to action -->
      <div class="container col-md-12">
        <div class="panel-body">
          @if($empresas->isEmpty())
            <p>No hay Empresas.</p>
          @else
          <div class="table-responsive">
          <table class="table table-hover table-striped">
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
                <td>{!! $empresa -> nombre !!}</td>
                <td>{!! $empresa -> direccion !!}</td>
                <td>{!! $empresa -> nombre_contacto !!}</td>
                <td>{!! $empresa -> telefono !!}</td>
                <td>{!! $empresa -> email !!}</td>
                <td>{!! $empresa -> web !!}</td>
                <td class="actions">
                    <a href="{{ url('/perfil/'.$empresa -> id) }}" class="btn btn-sm btn-icon btn-pure btn-success" class="btn btn-pencil">
                      <i class="fa fa-pencil" aria-hidden="true" ></i> Ver
                  </a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      @endif
    </div>
  </div>
</div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
  </body>
</html>