<?php
session_start();

require_once __DIR__ . '/controlador/LoginControlador.php';
$loginCtrl = new LoginControlador();

$accion = $_GET['accion'] ?? 'default';

switch ($accion) {

    case 'login':
        $loginCtrl->login();
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
