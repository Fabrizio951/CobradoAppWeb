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

    static public function ctrActualizarCliente($id_Cliente,$nombre_cliente,$apellido_cliente,$direccion_cliente,$telefono_cliente,$correo_cliente){

        $actulzarCliente = ClientesModelo::mdlActualizarCliente($id_Cliente,$nombre_cliente,$apellido_cliente,$direccion_cliente,$telefono_cliente,$correo_cliente);
        return $actulzarCliente;
    }

    static public function ctrBorrarClientes($id_Cliente){
        $eliminarCliente = ClientesModelo::mdlEliminarCliente($id_Cliente);
        return $eliminarCliente;
    }

}