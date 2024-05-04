<?php

require_once "../controladores/clientes.controlador.php";
require_once "../modelos/clientes.modelo.php";

class AjaxClientes{

    public function getDatosClientes(){
        $datos = ClientesControlador::ctrGetDatosClientes();
        echo json_encode($datos);
    }
}

$datos = new AjaxClientes();
$datos -> getDatosClientes();