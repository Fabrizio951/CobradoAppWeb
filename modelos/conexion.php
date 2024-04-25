<?php 
class Conexion{
    static public function conectar(){
        try{
            $servername = "DESKTOP-PT8Q7BK\SQLEXPRESS";
            $conexion = array("Database"=>"cobradorapp",
                            "UID"=>"admin",
                            "PWD"=>"admin",
                            "CharacterSet"=>"UTF-8");
            $conn = sqlsrv_connect($servername,$conexion);

            return $conn;
            
        } catch (Exception $e){
            // Manejar la excepción
            echo "Error: " . $e->getMessage();
            // Puedes agregar más detalles o acciones de manejo de errores aquí si es necesario
            return null; // Otra opción es devolver null para indicar que la conexión falló
        }
    }
}


