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


    <!-- Ventana Modal para ingresar o modificar un Cliente -->
    <div class="modal fade" id="mdlGestionarCliente" role="dialog">

      <div class="modal-dialog modal-lg">

        <!-- contenido del modal -->
        <div class="modal-content">

          <!-- Cabecera del modal -->
          <div class="modal-header bg-gray py-1 align-items-center">
            <h5 class="modal-title">Agregar Cliente</h5>
            <button type="button" class="btn btn-outline-primary text-white border-0 fs-5" data-dismiss="modal" id="btnCerrarModal">
              <i class="far fa-times-circle"></i>
            </button>
          </div>

          <!-- Cuerpo modal-->
          <div class="modal-body">

            <!-- Abrimos una fila-->
            <div class="row">
                <!-- Columna para registro del Nombre del Cliente -->
                <div class="col-lg-6">
                  <div class="form-group mb-2">
                    <label class="" for="iptNombreReg"><i class="fa fa-user-circle fs-6"></i>
                      <span class="small">Nombre del Cliente</span><span class="text-danger">*</span>
                    </label>
                    <input type="text" class="form-control form-control-sm" id="iptNombreReg" name="iptNombreReg" placeholder="Nombre del Cliente" required>
                    <span id="validate_nombre" class="text-danger small fst-italic"
                      style="display:none">Debe ingresar nombre del cliente</span>
                  </div>
                </div>

                <!-- Columna para registro de la Apellidos del Cliente -->
                <div class="col-lg-6">
                  <div class="form-group mb-2">
                    <label class="" for="iptApellidoReg"><i class="fa fa-user-circle fs-6"></i>
                      <span class="small">Apellido del Cliente</span><span class="text-danger">*</span>
                    </label>
                    <input type="text" class="form-control form-control-sm" id="iptApellidoReg"
                      name="iptApellidoReg" placeholder="Apellido del Cliente" required>
                    <span id="validate_apellido" class="text-danger small fst-italic"
                      style="display:none">Debe ingresar apellido del cliente</span>
                  </div>
                </div>

                <!-- Columna para registro de la direccion -->
                <div class="col-12">
                  <div class="form-group mb-2">
                    <label class="" for="iptDireccionReg">
                      <i class="fas fa-file-signature fs-6"></i>
                      <span class="small">Dirección</span><span class="text-danger"></span>
                    </label>
                    <input type="text" class="form-control form-control-sm" id="iptDireccionReg"
                    placeholder="Descripción">
                  </div>
                </div>

                <!-- Columna para registro del Telefono -->
                <div class="col-lg-6">
                  <div class="form-group mb-2">
                    <label class="" for="iptTelefonoReg"><i class="fa fa-user-circle fs-6"></i>
                      <span class="small">Teléfono</span><span class="text-danger"></span>
                    </label>
                    <input type="text" class="form-control form-control-sm" id="iptTelefonoReg"
                      name="iptTelefonoReg" placeholder="Nombre del Cliente">
                  </div>
                </div>

                <!-- Columna para registro del Correo -->
                <div class="col-lg-6">
                  <div class="form-group mb-2">
                    <label class="" for="iptCorreoReg"><i class="fa fa-user-circle fs-6"></i>
                      <span class="small">Correo</span><span class="text-danger"></span>
                    </label>
                    <input type="text" class="form-control form-control-sm" id="iptCorreoReg"
                      name="iptCorreoReg" placeholder="Nombre del Cliente">
                  </div>
                </div>

                <!-- Creacion de botones para cancelar y guardar el cliente -->
                <button type="button" class="btn btn-danger mt-3 mx-2" style="width:170px;" data-dismiss="modal" id="btnCancelarRegistro">Cancelar</button>

                <button type="button" style="width: 170px;" class="btn btn-primary mt-3 mx-2" id="btnGuardarCliente" onclick="formSubmitClick()">Guardar Cliente</button>
            </div>

          </div>

        </div>
      </div>
    </div>

    <script>
    $(document).ready(function(){
      var table;
      var accion;
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
                    $("#mdlGestionarCliente").modal("show");
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

      $("#btnCancelarRegistro,#btnCerrarModal").on("click",function(){

        $("#validate_nombre").css("display","none");
        $("#validate_apellido").css("display","none");
        $("#validate_direccion").css("display","none");
        $("#validate_telefono").css("display","none");
        $("#validate_correo").css("display","none");

        $("#iptNombreReg").val("");
        $("#iptApellidoReg").val("");
        $("#iptDireccionReg").val("");
        $("#iptTelefonoReg").val("");
        $("#iptCorreoReg").val("");
      })

      $("#tbl_clientes tbody").on("click",".btnEditarCliente",function(){

        accion = 4;

        $("#mdlGestionarCliente").modal('show');

        var data = table.row($(this).parents('tr')).data();
        console.log("data",data)

        // $("#iptIDcliente").val(data[1]);
        $("#iptNombreReg").val(data[2]);
        $("#iptApellidoReg").val(data[3]);
        $("#iptDireccionReg").val(data[4]);
        $("#iptTelefonoReg").val(data[5]);
        $("#iptCorreoReg").val(data[6]);

      })
    })

    function formSubmitClick(){
      // Validar ingreso de campos
      let nombre = $("#iptNombreReg").val().trim();
      let apellido = $("#iptApellidoReg").val().trim();
      let direccion = $("#iptDireccionReg").val().trim();
      let telefono = $("#iptTelefonoReg").val().trim();
      let correo = $("#iptCorreoReg").val().trim();

      let valid = true;

      if (nombre === "") {
        $("#validate_nombre").show();
        valid = false;
      } else {
        $("#validate_nombre").hide();
      }

      if (apellido === "") {
        $("#validate_apellido").show();
        valid = false;
      } else {
        $("#validate_apellido").hide();
      }

      if (!valid) {
        return;
      }

          var datos = new FormData();
          datos.append("accion", 2);
          datos.append("nombre_cliente", nombre);
          datos.append("apellido_cliente", apellido);
          datos.append("direccion_cliente", direccion);
          datos.append("telefono_cliente", telefono);
          datos.append("correo_cliente", correo);

          console.log("Enviando datos:", datos);

          $.ajax({
              url: "ajax/clientes.ajax.php",
              method: "POST",
              data: datos,
              cache: false,
              contentType: false,
              processData: false,
              dataType: 'json',
              success: function (respuesta) {
                console.log("Respuesta del servidor:", respuesta);
                if (respuesta.message === "ok"){

                  alert("El cliente se registró correctamente");

                  table.ajax.reload();

                  $("#mdlGestionarCliente").modal ('hide');

                  $("#iptNombreReg").val("");
                  $("#iptApellidoReg").val("");
                  $("#iptDireccionReg").val("");
                  $("#iptTelefonoReg").val("");
                  $("#iptCorreoReg").val("");
                } else {
                  alert("El cliente no se registró");
                }
              }, 
              error: function (jqXHR, textStatus, errorThrown){
                console.log("Error en la solicitud:", textStatus, errorThrown);
                alert("Ocurrió un error en la solicitud: " + textStatus);
              }
            });
    }
    
    </script>