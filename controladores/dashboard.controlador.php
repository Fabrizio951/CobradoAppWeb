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
}