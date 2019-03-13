<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cluster log&iacute;stico SLP</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/AdminLTE.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/skins/skin-blue.min.css') }}">
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

        <!-- Header Navbar -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Sidebar toggle button-->
                       
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- User Account Menu -->
                </ul>
            </div>
        </nav>
    </header>
    <!-- .container-->
    <div class="container">
        <div class="starter-template">
            <br/>
            <br/>
            <br/>
            @yield('content')
        </div>
    </div>
    <!-- /.container ---->
    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- To the right -->
        <div class="pull-right hidden-xs"></div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2019 <a href="#">Sedely</a>.</strong> Todos los derechos reservados.
    </footer>
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
    <!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 2.2.3 -->
    <script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src="js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="js/app.js"></script>

    <!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
</body>
</html>