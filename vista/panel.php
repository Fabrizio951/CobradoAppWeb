    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Panel de Control</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active">Panel de Control</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
               <div class="inner">
                 <h3 id="Mpagado"></h3>

                 <p>Monto pagado</p>
               </div>
               <div class="icon">
                <i class="ion ion-bag"></i>
               </div>
               <a href="#" class="small-box-footer">Ver más <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3 id="Dtotal"></h3>

                <p>Deuda total</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">Ver más  <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3 id="Cregistrados"></h3>

                <p>Clientes registrados</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">Ver más  <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3 id="Dpendientes"></h3>
              <!-- Para el porcentual y en pequeño pe solo pon al lado cuando vea que sea necesario <sup style="font-size: 20px">%</sup> -->
                <p>Deudas pendientes</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">Ver más  <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    <script>
      $(document).ready(function(){

        $.ajax({
          url: "ajax/dashboard.ajax.php",
          method: 'POST',
          dataType:'json',
          success:function(respuesta){
            console.log("respuesta",respuesta);
            $('#Mpagado').html('S./ '+ respuesta[0]['MontoPagado'].replace(/\d(?=(\d{3})+\.)/g,"$&," ))
            $('#Dtotal').html('S./ '+ respuesta[0]['DeudaTotal'].replace(/\d(?=(\d{3})+\.)/g,"$&," ))
            $('#Cregistrados').html(respuesta[0]['NúmerodeClientes'])
            $('#Dpendientes').html(respuesta[0]['DeudasPendientes'])
          }
        });
      })
    </script>