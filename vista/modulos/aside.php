  <!-- Main Sidebar Container --><!--   ////////////////////////////////MENU BARRA IZQUIERDA/////////////////////////////////////////  -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.html" class="brand-link">
      <img src="vista/assets/dist/img/CobradoAppLogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">CobradorApp</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="index.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Panel de Control
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a style="cursor: pointer;" class="nav-link" onclick="CargarContenido('vista/contenido/marcadores.php','content-wrapper')">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                MARCADORES
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a style="cursor: pointer;" class="nav-link" onclick="CargarContenido('vista/contenido/clientes.php','content-wrapper')">
              <i class="nav-icon fas fa-handshake"></i> 
              <p>
                CLIENTES
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a style="cursor: pointer;" class="nav-link" onclick="CargarContenido('vista/contenido/notas.php','content-wrapper')">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                NOTAS
              </p>
            </a>
          </li>

          <!-- MENU DESPLEGABLE DE OTRAS OPCIONES -->

          <li class="nav-item menu open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Otros
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a style="cursor: pointer;" class="nav-link" onclick="CargarContenido('vista/otros/informacion.php','content-wrapper')">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Información</p>
                </a>
              </li>
              <li class="nav-item">
                <a style="cursor: pointer;" class="nav-link" onclick="CargarContenido('vista/otros/ordenar.php','content-wrapper')">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ordenar clientes</p>
                </a>
              </li>
              <li class="nav-item">
                <a style="cursor: pointer;" class="nav-link" onclick="CargarContenido('vista/otros/recomendar.php','content-wrapper')">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Recomendar Web</p>
                </a>
              </li>
            </ul>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <script>
    $(".nav-link").on('click',function(){
      $(".nav-link").removeClass('active');
      $(this).addClass('active');
    })
  </script>