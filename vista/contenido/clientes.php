    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Clientes</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active">Clientes</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">

        <div class="row">
          <div class="col-lg-12">
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">CRITERIOS DE BUSQUEDA</h3>
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool text-danger" id="btnLimpiarBusqueda">
                        <i class="fas fa-times"></i>
                    </button>
                  </div> <!-- ./ end card-tools -->
                </div> <!-- ./ end card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-12 d-lg-flex">

                    <div style="width: 20%;" class="mx-1">
                      <input 
                        type="text" 
                        id="iptIDcliente"
                        class="form-control"
                        placeholder="Id del cliente"
                        data-index="1">
                    </div>

                    <div style="width: 20%;" class="mx-1">
                      <input 
                        type="text" 
                        id="iptNombre"
                        class="form-control"
                        placeholder="Nombre del cliente"
                        data-index="2">
                    </div>

                    <div style="width: 20%;" class="mx-1">
                      <input 
                        type="text" 
                        id="iptApellido"
                        class="form-control"
                        placeholder="Apellido del cliente"
                        data-index="3">
                    </div>
                    
                    <div style="width: 20%;" class="mx-1">
                      <input 
                        type="text" 
                        id="iptMontoDeudaDesde"
                        class="form-control"
                        placeholder="P. Deuda desde">
                    </div>

                    <div style="width: 20%;" class="mx-1">
                      <input 
                        type="text" 
                        id="iptMontoDeudaHasta"
                        class="form-control"
                        placeholder="P. Deuda hasta">
                    </div>

                  </div>
                </div>
              </div> <!-- ./ end card-body -->
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <table id="tbl_clientes" class="table table-striped w-100 shadow">
              <thead>
                <tr>
                  <th></th>
                  <th>ID Cliente</th>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>Dirección</th>
                  <th>Teléfono</th>
                  <th>Correo electronico</th>
                  <th>Estado</th>
                  <th>N° Deudas</th>
                  <th>Monto Total</th>
                  <th class="text-center">Opciones</th>
                </tr>
              </thead>
              <tbody>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- /.content -->

    <script>
    $(document).ready(function(){
      var table;

      /*
      LLenar tabla clientes 
      */
      table = $("#tbl_clientes").DataTable({
        dom: 'Bfrtip',
        buttons: [{
                text: 'Agregar Cliente',
                className: 'addNewRecord',
                action: function(e, dt, node, config) {
                    //EVENTO PARA LEVENTAR LA VENTA MODAL
                    alert('nuevo Boton')
                }
            },
            'excel', 'print', 'pageLength'
        ],
        pageLength: [5, 10, 15, 30, 50, 100],
        pageLength: 10,
        ajax:{
          url: "ajax/clientes.ajax.php",
          dataSrc: '',
          type:"POST",
          data:{'accion':1},
        },
        responsive:{
          details:{
            type:'column'
          }
        },
        columnDefs:[
          {
            targets: 0,
            orderable: false,
            className: 'control'
          },
          {
            targets: 7,
            createdCell: function(td,cellData,rowData,row,col){
              if(rowData[7] == "Inactivo"){
                $(td).parent().css("background","#FF7355")
              }
            }
          },
          {
            targets: 10,
            orderable: false,
            render: function(datqa, type, full, meta) {
                return "<center>" +
                        "<span class='btnEditarCliente text-primary px-1' style='cursor:pointer;'>" +
                        "<i class='fas fa-pencil-alt fs-5'></i>" +
                        "<span class='btnEliminarCliente text-danger px-1' style='cursor:pointer;'>" +
                        "<i class='fas fa-trash fs-5'></i>" +
                        "</span>" +
                        "</center>"
                }
          }
        ],
        language:{
          url: "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
        }
      });

      $("#iptIDcliente").keyup(function(){
        table.column($(this).data("index")).search(this.value).draw();
      })

      $("#iptNombre").keyup(function(){
        table.column($(this).data("index")).search(this.value).draw();
      })

      $("#iptApellido").keyup(function(){
        table.column($(this).data("index")).search(this.value).draw();
      })

      $("#iptMontoDeudaDesde,#iptMontoDeudaHasta").keyup(function(){
        table.draw();
      })

      $.fn.dataTable.ext.search.push(
        function(settings,data,dataIndex){

            var deudaDesde = parseFloat($("#iptMontoDeudaDesde").val());
            var deudaHasta = parseFloat($("#iptMontoDeudaHasta").val());

            var col_monto =  parseFloat(data[9]);

            if((isNaN(deudaDesde) && isNaN(deudaHasta)) ||
                (isNaN(deudaDesde) && col_monto <= deudaHasta) ||
                (deudaDesde <= col_monto && isNaN(deudaHasta)) ||
                (deudaDesde <= col_monto && col_monto <= deudaHasta)){
                    return true;
            }
            return false;  
        }
      )

      $("#btnLimpiarBusqueda").on("click",function(){
        $("#iptIDcliente").val("")
        $("#iptNombre").val("")
        $("#iptApellido").val("")
        $("#iptMontoDeudaDesde").val("")
        $("#iptMontoDeudaHasta").val("")

        table.search("").columns().search("").draw();
      })

    })
    </script>