<?php
class ClientesControlador{
    static public function ctrGetDatosClientes(){

        $datos = ClientesModelo::mdlGetDatosClientes();

        return $datos;
    }

    static public function ctrRegistrarCliente($nombre_cliente, $apellido_cliente, $direccion_cliente, $telefono_cliente, $correo_cliente){

        $registroCliente = ClientesModelo::mdlRegistrarCliente($nombre_cliente, $apellido_cliente, $direccion_cliente, $telefono_cliente, $correo_cliente);

        return $registroCliente;
    }

}