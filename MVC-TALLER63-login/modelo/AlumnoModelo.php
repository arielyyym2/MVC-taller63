<?php
require_once __DIR__ . '/../config/conexion.php';

class AlumnoModelo{
    public function obtenerTodos(){
        try {
            $conexion = new conexion();
            $conn = $conexion->conectar();

            $sql = "SELECT Id, Cedula, Nombres, Apellidos, Correo, Telefono, FechaNacimiento
                    FROM Alumnos
                    ORDER BY Id";

            $stmt = $conn->query($sql);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            error_log("Error en AlumnoModelo->obtenerTodos - " . $e->getMessage());
            return []; 
        }
    }
    //agregar metodo para consultar por nombre
    //agregar metodo para consultar por apellido
    public function guardarAlumno($alumno){
        // $alumno['id'];
        $conexion= new conexion();
        $conn= $conexion->conectar();
        $sqlInsert = 'INSERT INTO Alumnos (Cedula, Nombres, Apellidos, Correo, Telefono, FechaNacimiento)
              VALUES (:cedula, :nombre, :apellido, :correo, :telefono, :fechaNacimiento)';
        $stmt = $conn->prepare($sqlInsert);

        return $stmt->execute([
            ':cedula' => $alumno['cedula'],
            ':nombre' => $alumno['nombre'],
            ':apellido' => $alumno['apellido'],
            ':correo' => $alumno['correo'],
            ':telefono' => $alumno['telefono'],
            ':fechaNacimiento' => $alumno['fechaNacimiento'],
        ]);
    }


}

?>