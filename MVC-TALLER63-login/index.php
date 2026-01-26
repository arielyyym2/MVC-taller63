<?php
session_start();

require_once __DIR__ . '/controlador/LoginControlador.php';
require_once __DIR__ . '/controlador/AlumnoControlador.php';
$loginCtrl = new LoginControlador();

$accion = $_GET['accion'] ?? 'default';
$alumnoCtrl = new AlumnoControlador();

switch ($accion) {

    case 'login':
        $loginCtrl->login();
        break;

    case 'reporte':
        $alumnoCtrl->consultar();
        break;
    
    case 'registrarAlumno':
        include "vista/registrarAlumno.php";
        break;

    case 'guardarAlumno':
            $alumnoCtrl->guardarAlumno();
        break;

    case 'inicio':
        require_once __DIR__ . '/vista/layout/header.php';

        echo '
        <div class="container mt-5">
            <h2 class="text-center">¡Bienvenido al sistema de alumnos!</h2>
        </div>';

        require_once __DIR__ . '/vista/layout/footer.php';
        break;

    default:
        $loginCtrl->mostrarFormulario();
        break;
}
