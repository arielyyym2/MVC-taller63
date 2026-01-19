<?php
require_once __DIR__ . '/../config/conexion.php';

class AlumnoModelo{
    public function obtenerTodos()
    {
        try {
            $conexion = new conexion();
            $conn = $conexion->conectar();

            $sql = 'SELECT "id","usuario","clave" FROM "usuarios"
            ORDER BY "id"';

            $stmt = $conn->query($sql);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            error_log("Error en LoginModelo->autenticar - ." . $e->getMessage());
            return false;
        }
    }
}