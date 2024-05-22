<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Shalom Leegal | :3</title>

    <!-- Bootstrap -->
    <link href="vistas/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vistas/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vistas/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="vistas/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="vistas/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="vistas/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="vistas/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="vistas/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <!-- menu -->
          <?php 
          include "layout/menu.php";
          ?>
          <!-- /menu -->
        </div>
        <!-- nav -->
        <?php 
        include "layout/cabecera.php"
        ?>
        <!-- /nav -->

        <!-- page content -->
        <div class="right_col" role="main">
        <?php 
        //crear url amigables
        if (isset($_GET["ruta"])) {
          if (
            $_GET["ruta"] == "inicio"     ||
            $_GET["ruta"] == "usuarios"   ||
            $_GET["ruta"] == "categorias" ||
            $_GET["ruta"] == "productos"  ||
            $_GET["ruta"] == "clientes"   ||
            $_GET["ruta"] == "salir") {

            include "layout/". $_GET["ruta"].".php";
          } else {
            include "layout/404.php";
          }
        } else {
          include "layout/inicio.php";
        }
        ?>
        </div>
        <!-- /page content -->
        <?php 
        include "layout/footer.php";
        ?>
      </div>
    </div>

    <!-- jQuery -->
    <script src="vistas/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="vistas/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="vistas/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="vistas/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="vistas/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="vistas/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="vistas/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="vistas/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="vistas/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="vistas/vendors/Flot/jquery.flot.js"></script>
    <script src="vistas/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="vistas/vendors/Flot/jquery.flot.time.js"></script>
    <script src="vistas/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="vistas/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="vistas/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="vistas/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="vistas/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="vistas/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="vistas/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="vistas/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="vistas/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="vistas/vendors/moment/min/moment.min.js"></script>
    <script src="vistas/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="viatas/build/js/custom.min.js"></script>
	
  </body>
</html>
