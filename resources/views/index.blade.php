<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>USMP</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<style>
  
  .menu {
        position: relative;
        width: 200px; /* Ajusta el ancho del menú según sea necesario */
        background-color: #f2f2f2; /* Color de fondo del menú */
        padding: 10px; /* Ajusta el relleno del menú según sea necesario */
    }

    .boton-container {
        width: 100%;
        text-align: center;
    }

    .boton {
        display: block;
        width: 100%;
        padding: 10px 0;
        background-color: #BD1714;
        color: white;
        border: none;
        border-radius: 20px;
        margin-bottom: 10px; /* Ajusta el margen entre botones según sea necesario */
    }
    .cuadro {
        background-color: #dddddd;
        padding: 20px;
        border-radius: 10px;
        text-align: center;
        margin-bottom: 20px;
    }

    .opcion {
        margin-bottom: 10px;
    }
    .boton {
        margin-top: 10px;
    }
    
    .cuadro-boton {
        margin-top: 10px;
    }

    .cuadro-boton button {
        display: block;
        width: 100%;
        padding: 10px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .btn-mas {
        background-color: #007bff;
        color: #fff;
    }

    .btn-acceder {
        background-color: #28a745;
        color: #fff;
    }
</style>
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="data:image/png;base64,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" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">FIA USMP</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.html" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v3</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">

          </li>
          <li class="nav-item">
            
          </li>
          <li class="nav-item">
            
          </li>
          <li class="nav-item">
            
          </li>
          <li class="nav-item">
           
          </li>
          <li class="nav-item">
          </li>
          <li class="nav-header">EXAMPLES</li>
          <li class="nav-item">
          </li>
          <li class="nav-item">
          </li>
          <li class="nav-item">
            <a href="pages/kanban.html" class="nav-link">
              <i class="nav-icon fas fa-columns"></i>
              <p>
                Kanban Board
              </p>
            </a>
           </li> 
           <li class="nav-item">
                <a href="{{ route('profile') }}" class="btn btn-primary" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Perfil</p>
                </a>
            </li>
            </li>    
          <li>
            <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">



  <div class="row">
    <div class="col-md-6">
        <div class="cuadro">
            <div class="opcion">WEB TRADICIONAL</div>
            <div class="cuadro-boton">
                <button class="btn btn-primary btn-block" onclick="window.location.href='https://jobboard.universia.net/usmp'">ir a plataforma</button>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="cuadro">
            <div class="opcion">PLATAFORMA CON RECOMENDACIONES PERSONALIZADAS</div>
            <div class="cuadro-boton">
                <button class="btn btn-success btn-block">ir a plataforma</button>
            </div>
        </div>
    </div>
</div>


    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>

