<?php
$servername = "DESKTOP-PT8Q7BK\SQLEXPRESS";
$conexion = array("Database"=>"cobradorapp",
                "UID"=>"admin",
                "PWD"=>"admin",
                "CharacterSet"=>"UTF-8");
$conn = sqlsrv_connect($servername,$conexion);

/*
if($conn){
    echo "conexion exitosa";
} else {
    echo "conexion mala";
}
*/


$query = "SELECT * FROM Clientes";
$res=sqlsrv_query($conn,$query);

while ($row=sqlsrv_fetch_array($res)){
    echo $row[5];
}