<?php
require_once __DIR__ . '/../config/conexion.php';
class LoginModelo
{
    public function autenticar($usuario, $clave)
    {
        try {
            $conexion = new conexion();
            $conn = $conexion->conectar();

            $sql = "SELECT usuario, clave from usuarios where usuario= :usuario and clave= :clave";
            $stmt = $conn->prepare($sql);
            $params = ['usuario' => $usuario, 'clave' => $clave];
            $stmt->execute($params);

            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            error_log("Error en loginModelo->autenticar - " . $e->getMessage());
            return false;
        }
    }
}
