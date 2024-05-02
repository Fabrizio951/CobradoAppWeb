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

    public function getDeudaProximo(){

        $deudaProximo = DashboardControlador::ctrGetdeudaProximo();
        echo json_encode($deudaProximo);
    }

    public function getDeudaPorVencer(){

        $deudaPorVencer = DashboardControlador::ctrGetdeudaPorVencer();
        echo json_encode($deudaPorVencer);
    }

    public function getDeudaVencido(){

        $deudaVencido = DashboardControlador::ctrGetdeudaVencido();
        echo json_encode($deudaVencido);
    }

    public function getDeudaAlerta(){

        $deudaAlerta = DashboardControlador::ctrGetdeudaAlerta();
        echo json_encode($deudaAlerta);
    }

    public function getDeudas(){

        $Deudas =  DashboardControlador::ctrGetDeudas();
        echo json_encode($Deudas);
    }

    public function getClientes(){

        $Clientes = DashboardControlador::ctrGetClientes();
        echo json_encode($Clientes);
    }
} 

if(isset($_POST['accion']) && $_POST['accion'] == 1){

    $deudaAlcorriente = new AjaxDashboard();
    $deudaAlcorriente  -> getDeudaAlcorriente();
    
} elseif(isset($_POST['accion']) && $_POST['accion'] == 2){

    $deudaProximo = new AjaxDashboard();
    $deudaProximo -> getDeudaProximo();
    
} elseif(isset($_POST['accion']) && $_POST['accion'] == 3){

    $deudaPorVencer = new AjaxDashboard();
    $deudaPorVencer -> getDeudaPorVencer();
    
} elseif(isset($_POST['accion']) && $_POST['accion'] == 4){

    $deudaVencido = new AjaxDashboard();
    $deudaVencido -> getDeudaVencido();
    
} elseif(isset($_POST['accion']) && $_POST['accion'] == 5){

    $deudaAlerta = new AjaxDashboard();
    $deudaAlerta -> getDeudaAlerta();
    
} elseif(isset($_POST['accion']) && $_POST['accion'] == 6){

    $Deudas = new AjaxDashboard();
    $Deudas -> getDeudas();
    
} elseif(isset($_POST['accion']) && $_POST['accion'] == 7){

    $Deudas = new AjaxDashboard();
    $Deudas -> getClientes();
    
}else{
    $datos = new AjaxDashboard();
    $datos -> getDatosDashboard();
}
