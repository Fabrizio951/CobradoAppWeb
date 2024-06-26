<?php

require_once "../controladores/clientes.controlador.php";
require_once "../modelos/clientes.modelo.php";

class AjaxClientes{

    public $id_Cliente;
    public $nombre_cliente;
    public $apellido_cliente;
    public $direccion_cliente;
    public $telefono_cliente;
    public $correo_cliente;

    public function getDatosClientes(){
        $datos = ClientesControlador::ctrGetDatosClientes();
        echo json_encode($datos);
    }

    public function ajaxRegistrarCliente(){
        $cliente = ClientesControlador::ctrRegistrarCliente($this->nombre_cliente,$this->apellido_cliente,$this->direccion_cliente,$this->telefono_cliente,$this->correo_cliente);
        echo json_encode(array("status" => "success", "message" => $cliente));
    }

    public function ajaxActualizarCliente(){
        $cliente = ClientesControlador::ctrActualizarCliente($this->id_Cliente,$this->nombre_cliente,$this->apellido_cliente,$this->direccion_cliente,$this->telefono_cliente,$this->correo_cliente);
        echo json_encode(array("status" => "success", "message" => $cliente));
    }
    public function ajaxEliminarCliente(){
        $cliente = ClientesControlador::ctrBorrarClientes($this->id_Cliente);
            echo json_encode(array("status" => "success", "message" => $cliente));
    }
}

if (isset($_POST['accion'])) {
    $accion = $_POST['accion'];
    $ajaxClientes = new AjaxClientes();

    if ($accion == 2) {
        $ajaxClientes->nombre_cliente = $_POST["nombre_cliente"];
        $ajaxClientes->apellido_cliente = $_POST["apellido_cliente"];
        $ajaxClientes->direccion_cliente = $_POST["direccion_cliente"];
        $ajaxClientes->telefono_cliente = $_POST["telefono_cliente"];
        $ajaxClientes->correo_cliente = $_POST["correo_cliente"];
        $ajaxClientes->ajaxRegistrarCliente();
    } else if ($accion == 4){
        $ajaxClientes->id_Cliente = $_POST["id_cliente"];
        $ajaxClientes->nombre_cliente = $_POST["nombre_cliente"];
        $ajaxClientes->apellido_cliente = $_POST["apellido_cliente"];
        $ajaxClientes->direccion_cliente = $_POST["direccion_cliente"];
        $ajaxClientes->telefono_cliente = $_POST["telefono_cliente"];
        $ajaxClientes->correo_cliente = $_POST["correo_cliente"];
        $ajaxClientes->ajaxActualizarCliente();
    } else if ($accion == 5){
        $ajaxClientes->id_Cliente = $_POST["id_cliente"];
        $ajaxClientes->ajaxEliminarCliente();
    } 
    else {
        $ajaxClientes->getDatosClientes();
    }
} else {
    echo json_encode(array('status' => 'error', 'message' => 'No se especificó una acción válida.'));
}


