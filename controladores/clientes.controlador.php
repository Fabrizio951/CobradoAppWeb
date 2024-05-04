<?php
class ClientesControlador{
    static public function ctrGetDatosClientes(){

        $datos = ClientesModelo::mdlGetDatosClientes();

        return $datos;
    }
}