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
        <!-- Grafico de Barras Al corriente-->
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
                  <canvas id=barChar style="min-height: 250px; height: 300px; max-height: 350px; width: 100%;">

                  </canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--/ Grafico de Barras -->

        <!-- Grafico de Barras Proximo-->
        <div class="row">
          <div class="col-12">
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title" id="Proximo"></h3>
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
                  <canvas id=barChar1 style="min-height: 250px; height: 300px; max-height: 350px; width: 100%;">

                  </canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--/ Grafico de Barras -->
        
        <!-- Grafico de Barras Por Vencer-->
        <div class="row">
          <div class="col-12">
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title" id="PorVencer"></h3>
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
                  <canvas id=barChar2 style="min-height: 250px; height: 300px; max-height: 350px; width: 100%;">

                  </canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--/ Grafico de Barras-->

        <!-- Grafico de Barras Vencido-->
        <div class="row">
          <div class="col-12">
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title" id="Vencido"></h3>
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
                  <canvas id=barChar3 style="min-height: 250px; height: 300px; max-height: 350px; width: 100%;">

                  </canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--/ Grafico de Barras-->

        <!-- Grafico de Barras Alerta-->
        <div class="row">
          <div class="col-12">
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title" id="Alerta"></h3>
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
                  <canvas id=barChar4 style="min-height: 250px; height: 300px; max-height: 350px; width: 100%;">

                  </canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--/ Grafico de Barras-->

        <div class="row">
          <div class="col-lg-6">
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Clientes</h3>
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                    </button>
                  </div> <!-- ./ end card-tools -->
                </div> <!-- ./ end card-header -->
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table" id="tbl_Clientes">
                    <thead>
                      <tr>
                        <th>Cod Cliente</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Dirección</th>
                        <th>Teléfono</th>
                        <th>Correo</th>
                        <th>Estado</th>
                      </tr>
                    </thead>
                    <tbody>

                    </tbody>
                  </table>
                </div>
              </div> <!-- ./ end card-body -->
            </div>
          </div>
          <div class="col-lg-6">
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Deudas</h3>
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                    </button>
                  </div> <!-- ./ end card-tools -->
                </div> <!-- ./ end card-header -->
              <div class="card-body">        
                <div class="table-responsive">
                    <table class="table" id="tbl_Deudas">
                      <thead>
                        <tr>
                          <th>Cod Deudas</th>
                          <th>Cod Clientes</th>
                          <th>Monto</th>
                          <th>Vencimiento</th>
                          <th>Estado</th>
                          <th>Moneda</th>
                          <th>Nivel</th>
                        </tr>
                      </thead>
                      <tbody>

                      </tbody>
                    </table>
                </div>
              </div> <!-- ./ end card-body -->
            </div>
          </div>
        </div>

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    <script>
    $(document).ready(function(){
      /* LLENAR  TARJETAS INFORMATIVAS*/
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
      
      /* GRAFICO DE BARRAS DE LOS DIFERENTES NIVELES DE DEUDA*/
        /// Sacar datos del Al Corriente
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
            
            var barChartCanvas = $("#barChar").get(0).getContext('2d');

            var areaChartData = {
              labels:fecha_AlCorriente,
              datasets:[
                {
                  label:'Monto',
                  backgroundColor:'rgba(214, 214, 214 )',
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

        // Sacar datos Proximo
        $.ajax({
          url: "ajax/dashboard.ajax.php",
          method: 'POST',
          data:{
            'accion':2 //Parametros para obtener Deuda al corriente
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

            $('#Proximo').html('Proximo: S./ '+ Monto_AlCorriente_Total.toString().replace(/\d(?=(\d{3})+\.)/g,"$&,"));
            
            
              var barChartCanvas = $("#barChar1").get(0).getContext('2d');

              var areaChartData = {
                labels:fecha_AlCorriente,
                datasets:[
                  {
                    label:'Monto',
                    backgroundColor:'rgba(104, 255, 0 )',
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

        // Sacar datos Por Vencer
        $.ajax({
          url: "ajax/dashboard.ajax.php",
          method: 'POST',
          data:{
            'accion':3 //Parametros para obtener Deuda al corriente
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

            $('#PorVencer').html('Por Vencer: S./ '+ Monto_AlCorriente_Total.toString().replace(/\d(?=(\d{3})+\.)/g,"$&,"));
            
            
              var barChartCanvas = $("#barChar2").get(0).getContext('2d');

              var areaChartData = {
                labels:fecha_AlCorriente,
                datasets:[
                  {
                    label:'Monto',
                    backgroundColor:'rgba(251, 255, 0 )',
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

        // Sacar datos Vencido
        $.ajax({
          url: "ajax/dashboard.ajax.php",
          method: 'POST',
          data:{
            'accion':4 //Parametros para obtener Deuda al corriente
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

            $('#Vencido').html('Vencido: S./ '+ Monto_AlCorriente_Total.toString().replace(/\d(?=(\d{3})+\.)/g,"$&,"));
            
            
              var barChartCanvas = $("#barChar3").get(0).getContext('2d');

              var areaChartData = {
                labels:fecha_AlCorriente,
                datasets:[
                  {
                    label:'Monto',
                    backgroundColor:'rgba(255, 170, 0 )',
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

        // Sacar Alertas
        $.ajax({
          url: "ajax/dashboard.ajax.php",
          method: 'POST',
          data:{
            'accion':5 //Parametros para obtener Deuda al corriente
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

            $('#Alerta').html('Alerta: S./ '+ Monto_AlCorriente_Total.toString().replace(/\d(?=(\d{3})+\.)/g,"$&,"));
            
            
              var barChartCanvas = $("#barChar4").get(0).getContext('2d');

              var areaChartData = {
                labels:fecha_AlCorriente,
                datasets:[
                  {
                    label:'Monto',
                    backgroundColor:'rgba(255, 35, 0 )',
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
      /* LISTADO DE CLIENTES Y DEUDAS*/
        //DEUDAS
        $.ajax({
          url: "ajax/dashboard.ajax.php",
          method: 'POST',
          data:{
            'accion':6
          },
          dataType: 'json',
          success:function(respuesta){
            console.log("respuesta",respuesta);

            for (let i = 0; i<respuesta.length; i++){
              filas = '<tr>'+
                          '<td>' + respuesta[i]["ID_Deuda"]+'</td>'+
                          '<td>' + respuesta[i]["ID_Cliente"]+'</td>'+
                          '<td>' + respuesta[i]["Monto"]+'</td>'+
                          '<td>' + respuesta[i]["Vencimiento"]+'</td>'+
                          '<td>' + respuesta[i]["Estado"]+'</td>'+
                          '<td>' + respuesta[i]["Moneda"]+'</td>'+
                          '<td>' + respuesta[i]["Nivel"]+'</td>'+
                      '</tr>'
              $("#tbl_Deudas tbody").append(filas);
            }
          }
        });
        //Clientes
        $.ajax({
          url: "ajax/dashboard.ajax.php",
          method: 'POST',
          data:{
            'accion':7
          },
          dataType: 'json',
          success:function(respuesta){
            console.log("respuesta",respuesta);

            for (let i = 0; i<respuesta.length; i++){
              filas = '<tr>'+
                          '<td>' + respuesta[i]["ID_Cliente"]+'</td>'+
                          '<td>' + respuesta[i]["Nombre"]+'</td>'+
                          '<td>' + respuesta[i]["Apellidos"]+'</td>'+
                          '<td>' + respuesta[i]["Dirección"]+'</td>'+
                          '<td>' + respuesta[i]["Teléfono"]+'</td>'+
                          '<td>' + respuesta[i]["Correo_electrónico"]+'</td>'+
                          '<td>' + respuesta[i]["Estado"]+'</td>'+
                      '</tr>'
              $("#tbl_Clientes tbody").append(filas);
            }
          }
        })
      
    });
    </script>