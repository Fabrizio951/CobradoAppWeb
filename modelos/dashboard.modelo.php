<?php
require_once "conexion.php";
class DashboardModelo{
    static public function mdlGetDatosDashboard(){
        try {
            $conn = conexion::conectar();

            // Verifica si la conexión se estableció correctamente
            if (!$conn) {
                throw new Exception("Error al conectar a la base de datos.");
            }

            // Prepara la llamada al procedimiento almacenado
            $query = "{CALL ObtenerDatosClientesDeudas}";
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

    static public function mdlGetdeudaAlcorriente(){
        try {
            $conn = conexion::conectar();

            // Verifica si la conexión se estableció correctamente
            if (!$conn) {
                throw new Exception("Error al conectar a la base de datos.");
            }

            // Prepara la llamada al procedimiento almacenado
            $query = "{CALL ListarDeudasAlCorriente}";
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

    static public function mldGetdeudaProximo(){
        try {
            $conn = conexion::conectar();

            // Verifica si la conexión se estableció correctamente
            if (!$conn) {
                throw new Exception("Error al conectar a la base de datos.");
            }

            // Prepara la llamada al procedimiento almacenado
            $query = "{CALL ListarDeudasPoximo}";
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

    static public function mldGetdeudaPorVencer(){
        try {
            $conn = conexion::conectar();

            // Verifica si la conexión se estableció correctamente
            if (!$conn) {
                throw new Exception("Error al conectar a la base de datos.");
            }

            // Prepara la llamada al procedimiento almacenado
            $query = "{CALL ListarDeudasPorVencer}";
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

    static public function mldGetdeudaVencido(){
        try {
            $conn = conexion::conectar();

            // Verifica si la conexión se estableció correctamente
            if (!$conn) {
                throw new Exception("Error al conectar a la base de datos.");
            }

            // Prepara la llamada al procedimiento almacenado
            $query = "{CALL ListarDeudasVencido}";
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

    static public function mldGetdeudaAlerta(){
        try {
            $conn = conexion::conectar();

            // Verifica si la conexión se estableció correctamente
            if (!$conn) {
                throw new Exception("Error al conectar a la base de datos.");
            }

            // Prepara la llamada al procedimiento almacenado
            $query = "{CALL ListarDeudasAlerta}";
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

    static public function mldGetDeudas(){
        try {
            $conn = conexion::conectar();

            // Verifica si la conexión se estableció correctamente
            if (!$conn) {
                throw new Exception("Error al conectar a la base de datos.");
            }

            // Prepara la llamada al procedimiento almacenado
            $query = "{CALL ListarDeduas}";
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

    static public function mldGetClientes(){
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
