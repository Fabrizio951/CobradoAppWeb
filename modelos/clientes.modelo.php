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
            $query = "{CALL ListarClientesCRUD}";
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

    static public function mdlRegistrarCliente($nombre_cliente,$apellido_cliente,$direccion_cliente,$telefono_cliente,$correo_cliente){
        try {
            $conn = conexion::conectar();

            if (!$conn) {
                throw new Exception("Error al conectar a la base de datos.");
            }

            $query = "{CALL InsertarCliente(?, ?, ?, ?, ?)}";
            $params = array(
                array(&$nombre_cliente, SQLSRV_PARAM_IN),
                array(&$apellido_cliente, SQLSRV_PARAM_IN),
                array(&$direccion_cliente, SQLSRV_PARAM_IN),
                array(&$telefono_cliente, SQLSRV_PARAM_IN),
                array(&$correo_cliente, SQLSRV_PARAM_IN)
            );

            $stmt = sqlsrv_prepare($conn, $query, $params);

            if (!$stmt) {
                throw new Exception("Error al preparar la consulta.");
            }

            $result = sqlsrv_execute($stmt);

            if (!$result) {
                throw new Exception("Error al ejecutar el procedimiento almacenado: " . print_r(sqlsrv_errors(), true));
            } else {
                $respuesta = "ok";
            }

            sqlsrv_free_stmt($stmt); // Liberar el recurso del statement
            sqlsrv_close($conn); // Cerrar la conexión

            

        } catch (Exception $e) {
            return "Excepción capturada: " . $e->getMessage() . "\n";
        }
        return $respuesta;
    }

    static public function mdlActualizarCliente($id_Cliente,$nombre_cliente,$apellido_cliente,$direccion_cliente,$telefono_cliente,$correo_cliente){
        try {
            $conn = conexion::conectar();

            if (!$conn) {
                throw new Exception("Error al conectar a la base de datos.");
            }

            $query = "{CALL ActualizarDatos(?, ?, ?, ?, ?, ?)}";
            $params = array(
                array(&$id_Cliente, SQLSRV_PARAM_IN),
                array(&$nombre_cliente, SQLSRV_PARAM_IN),
                array(&$apellido_cliente, SQLSRV_PARAM_IN),
                array(&$direccion_cliente, SQLSRV_PARAM_IN),
                array(&$telefono_cliente, SQLSRV_PARAM_IN),
                array(&$correo_cliente, SQLSRV_PARAM_IN)
            );

            $stmt = sqlsrv_prepare($conn, $query, $params);

            if (!$stmt) {
                throw new Exception("Error al preparar la consulta.");
            }

            $result = sqlsrv_execute($stmt);

            if (!$result) {
                throw new Exception("Error al ejecutar el procedimiento almacenado: " . print_r(sqlsrv_errors(), true));
            } else {
                $respuesta = "ok";
            }

            sqlsrv_free_stmt($stmt); // Liberar el recurso del statement
            sqlsrv_close($conn); // Cerrar la conexión

            

        } catch (Exception $e) {
            return "Excepción capturada: " . $e->getMessage() . "\n";
        }
        return $respuesta;
    }

    static public function mdlEliminarCliente($id_Cliente){
        try {
            $conn = conexion::conectar();

            if (!$conn) {
                throw new Exception("Error al conectar a la base de datos.");
            }

            $query = "{CALL EliminarCliente(?)}";
            $params = array(
                array(&$id_Cliente, SQLSRV_PARAM_IN)
            );

            $stmt = sqlsrv_prepare($conn, $query, $params);

            if (!$stmt) {
                throw new Exception("Error al preparar la consulta.");
            }

            $result = sqlsrv_execute($stmt);

            if (!$result) {
                throw new Exception("Error al ejecutar el procedimiento almacenado: " . print_r(sqlsrv_errors(), true));
            } else {
                $respuesta = "ok";
            }

            sqlsrv_free_stmt($stmt); // Liberar el recurso del statement
            sqlsrv_close($conn); // Cerrar la conexión

            

        } catch (Exception $e) {
            return "Excepción capturada: " . $e->getMessage() . "\n";
        }
        return $respuesta;
    }
}