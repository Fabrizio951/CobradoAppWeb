<?php 

$servername = "DESKTOP-PT8Q7BK\SQLEXPRESS";
$conexion = array("Database"=>"cobradorapp",
                  "UID"=>"admin",
                  "PWD"=>"admin",
                  "CharacterSet"=>"UTF-8");
$con = sqlsrv_connect($servername,$conexion);
if($con){
    echo "conexion exitosa";
} else {
    echo "Fallo de la conexion";
}

?>