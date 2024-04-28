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
                <i class="ion ion-cash"></i>
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

                <p>Balance Total</p>
              </div>
              <div class="icon">
                <i class="ion ion-cash"></i>
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
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">Ver más  <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!--/. Small boxes-->
        <div class="row">
          <div class="col-12">
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title" id="AlCorriente"></h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="chart">
                  <canvas id=barChart style="min-height: 250px; height: 300px; max-height: 350px; width: 100%;">

                  </canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
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

        setInterval(() => {
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
          });
        }, 10000);

        $.ajax({
          url: "ajax/dashboard.ajax.php",
          method: 'POST',
          data:{
            'accion':1 //Parametros para obtener Deuda al corriente
          },
          dataType:'json',
          success:function(respuesta){
            console.log("respuesta",respuesta);

            var fecha_AlCorriente = [];
            var Monto_AlCorriente = [];
            var Monto_AlCorriente_Total = 0;

            for(let i = 0; i<respuesta.length; i++){
              fecha_AlCorriente.push(respuesta[i]['Fecha_deuda_formateada']);
              Monto_AlCorriente.push(respuesta[i]['Monto']);
              Monto_AlCorriente_Total = parseFloat(Monto_AlCorriente_Total) + parseFloat(respuesta[i]['Monto']);
            }

            $('#AlCorriente').html('Al corriente: S./ '+ Monto_AlCorriente_Total.toString().replace(/\d(?=(\d{3})+\.)/g,"$&,"));
            
            var barChartCanvas = $("#barChart").get(0).getContext('2d');

            var areaChartData = {
              labels:fecha_AlCorriente,
              datasets:[
                {
                  label:'Monto',
                  backgroundColor:'rgba(60,141,188,0.9)',
                  data: Monto_AlCorriente
                }
              ]
            }

            var barChartData = $.extend(true,{},areaChartData);

            var temp0 = areaChartData.datasets[0];

            barChartData.datasets[0] = temp0;

            var barChartOptions = {
              maintainAspectRatio: false,
              responsive: true,
              events: false,
              legend:{
                display: true
              },
              scales: {
                  yAxes: [{
                      ticks: {
                          beginAtZero: true,
                          max: 1200 // Establecer el límite superior del eje y a 1200
                      }
                  }]
              },
              animation:{
                duration: 500,
                easing: "easeOutQuart", 
                onComplete: function () {
                  var ctx = this.chart.ctx;
                  ctx.font = Chart.helpers.fontString(Chart.defaults.global.defaultFontFamily, 'normal',Chart.defaults.global.defaultFontFamily);
                  ctx.textAlign='center';
                  ctx.textBaseline='bottom';

                  this.data.datasets.forEach(function (dataset) {
                    for (var i = 0; i < dataset.data.length; i++) {
                      var model = dataset._meta[Object.keys(dataset._meta)[0]].data[i]._model, 
                          scale_max = dataset._meta[Object.keys(dataset._meta)[0]].data[i]._yScale.maxHeight;
                      ctx.fillstyle= '#444';
                      var y_pos = model.y - 5;
                      if ((scale_max - model.y) / scale_max >= 0.93)
                        y_pos = model.y + 20;
                      ctx.fillText(dataset.data[i], model.x, y_pos);
                    }
                  });
                }
              }
            }

            new Chart(barChartCanvas, {
              type: 'bar',
              data:barChartData,
              options:barChartOptions
            })
            
          }
        });
    });
    </script>