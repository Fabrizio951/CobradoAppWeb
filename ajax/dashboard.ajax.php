<?php

require_once "../controladores/dashboard.controlador.php";
require_once "../modelos/dashboard.modelo.php";

class AjaxDashboard{
    public function getDatosDashboard(){

        $datos = DashboardControlador::ctrGetDatosDashboard();

        echo json_encode($datos);
    }

    public function getDeudaAlcorriente(){

        $deudaAlcorriente = DashboardControlador::ctrGetdeudaAlcorriente();
        echo json_encode($deudaAlcorriente);
    }
} 

if(isset($_POST['accion']) && $_POST['accion'] == 1){

    $deudaAlcorriente = new AjaxDashboard();
    $deudaAlcorriente  -> getDeudaAlcorriente();
    
}else{
    $datos = new AjaxDashboard();
    $datos -> getDatosDashboard();
}