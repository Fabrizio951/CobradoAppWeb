<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CobradorApp</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="vista/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="vista/assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

  <!-- ============================================================
  =ESTILOS PARA USO DE DATATABLES JS
  ===============================================================-->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.0/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.0/css/buttons.dataTables.min.css">

  <!-- iCheck -->
  <link rel="stylesheet" href="vista/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="vista/assets/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="vista/assets/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="vista/assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="vista/assets/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="vista/assets/plugins/summernote/summernote-bs4.min.css">

  <!-- Mis cambios -->
  <link rel="stylesheet" href="vista/assets/dist/css/plantilla.css">


  <!-- SCRIPTS IMPORTANTES -->
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="vista/assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">

  <link rel="stylesheet" href="vista/assets/dist/css/toastr.min.css">

  <!-- jQuery -->
  <script src="vista/assets/plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="vista/assets/plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="vista/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="vista/assets/plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="vista/assets/plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="vista/assets/plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="vista/assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="vista/assets/plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="vista/assets/plugins/moment/moment.min.js"></script>
  <script src="vista/assets/plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="vista/assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="vista/assets/plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="vista/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="vista/assets/dist/js/adminlte.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="vista/assets/dist/js/demo.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="vista/assets/dist/js/pages/dashboard.js"></script>

  <!-- ============================================================
  =LIBRERIAS PARA USO DE DATATABLES JS
  ===============================================================-->
  <script src="https://cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>        
  <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>

  <!-- ============================================================
  =LIBRERIAS PARA EXPORTAR A ARCHIVOS
  ===============================================================-->
  <script src="https://cdn.datatables.net/buttons/2.0.0/js/dataTables.buttons.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.print.min.js"></script>

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="vista/assets/dist/img/CobradoAppLogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>
    <?php
      include "modulos/navbar.php";
      include "modulos/aside.php";
    ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <?php
      include "vista/panel.php"; 
    ?>
  </div>
  <!-- /.content-wrapper -->
    <?php
      include "modulos/footer.php";
    ?>
</div>
<!-- ./wrapper -->

<script>
  function CargarContenido(pagina_php,contenedor){
    $("."+contenedor).load(pagina_php);
  }
</script>

</body>
</html>
