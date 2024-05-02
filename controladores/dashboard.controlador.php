<?php
class DashboardControlador{
    static public function ctrGetDatosDashboard(){

        $datos = DashboardModelo::mdlGetDatosDashboard();

        return $datos;
    }

    static public function ctrGetdeudaAlcorriente(){
        $deudaAlcorriente = DashboardModelo::mdlGetdeudaAlcorriente();

        return $deudaAlcorriente;
    }

    static public function ctrGetdeudaProximo(){
        $deudaProximo = DashboardModelo::mldGetdeudaProximo();

        return $deudaProximo;
    }

    static public function ctrGetdeudaPorVencer(){
        $deudaPorVencer = DashboardModelo::mldGetdeudaPorVencer();

        return $deudaPorVencer;
    }
    
    static public function ctrGetdeudaVencido(){
        $deudaVencido = DashboardModelo::mldGetdeudaVencido();

        return $deudaVencido;
    }

    static public function ctrGetdeudaAlerta(){
        $deudaAlerta = DashboardModelo::mldGetdeudaAlerta();

        return $deudaAlerta;
    }

    static public function ctrGetDeudas(){
        $Deudas = DashboardModelo::mldGetDeudas();

        return $Deudas;
    }

    static public function ctrGetClientes(){
        $Clientes = DashboardModelo::mldGetClientes();

        return $Clientes;
    }
}