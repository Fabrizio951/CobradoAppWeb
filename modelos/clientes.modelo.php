<?php
require_once "conexion.php";
class ClientesModelo{
    static public function mdlGetDatosClientes(){
        try {
            $conn = conexion::conectar();

            // Verifica si la conexión se estableció correctamente
            if (!$conn) {
                throw new Exception("Error al conectar a la base de datos.");
            }

            // Prepara la llamada al procedimiento almacenado
            $query = "{CALL ListarClientes}";
            $stmt = sqlsrv_prepare($conn, $query);

            // Verifica si la preparación fue exitosa
            if (!$stmt) {
                throw new Exception("Error al preparar la consulta.");
            }

            // Ejecuta el procedimiento almacenado
            $result = sqlsrv_execute($stmt);

            // Verifica si la ejecución fue exitosa
            if (!$result) {
                throw new Exception("Error al ejecutar el procedimiento almacenado.");
            }

            $datos = array();
            // Obtiene todos los resultados como un array
            while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
                $datos[] = $row;
            }

            return $datos;
        
        } catch (Exception $e) {
            // Maneja la excepción
            echo "Error: " . $e->getMessage();
            return null;
        }
    }
}