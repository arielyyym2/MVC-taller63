<?php
require_once __DIR__ . '/../modelo/AlumnoModelo.php';


class AlumnoControlador{
    public function consultar(){
        $alumnoModelo = new AlumnoModelo();
        $alumnos = $alumnoModelo->obtenerTodos();

        $cantidad = count($alumnos);

        require_once __DIR__ . '/../vista/listadoAlumnos.php';


    }
    public function guardarAlumno(){
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        return;
        }

        if (empty($_POST['cedula'])) {
            $this->mostrarFormulario("La cédula es obligatoria");
            return;
        }

        $alumno = [
            'cedula' => trim($_POST['cedula']),
            'nombre' => trim($_POST['nombre']),
            'apellido' => trim($_POST['apellido']),
            'correo' => trim($_POST['correo']),
            'telefono' => trim($_POST['telefono']),
            'fechaNacimiento' => $_POST['fechaNacimiento']
        ];

        $alumnoModelo = new AlumnoModelo();
        $cantReg = $alumnoModelo->guardarAlumno($alumno);

        if($cantReg > 0){
            $this->mostrarFormulario("Alumno guardado con exito");
        }else{
            $this->mostrarFormulario("Error al guardar los datos");
        }

    }
    public function mostrarFormulario($error = '')
    {
        require_once __DIR__ . '/../vista/registrarAlumno.php';
    }



}

?>