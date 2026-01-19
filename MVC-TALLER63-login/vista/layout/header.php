<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taller de Gestión de Alumnos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body class="d-flex flex-column min-vh-100">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php?accion=inicio">Inicio</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarAlumnos" role="button" data-bs-toggle="dropdown" aria-expanded="false">Alumnos</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarAlumnos">
                            <li>
                                <a class="dropdown-item" href="index.php?accion=crear">Crear Alumno</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="index.php?accion=listar">Listar Alumnos</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?accion=reporte">Reporte</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarPerfil" role="button" data-bs-toggle="dropdown" aria-expanded="false">Mi perfil</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarAlumnos">
                            <li>
                                <a class="dropdown-item" href="index.php?accion=opciones">Opciones</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="index.php?accion=logout">Cerrar sesion</a>
                            </li>
                        </ul>
                    </li>

                </ul>

                <?php if (isset($_SESSION['usuario']['usuario'])): ?>
                    <span class="navbar-text text-white ms-auto">
                        <?= $_SESSION['usuario']['usuario'] ?>
                    </span>
                <?php endif; ?>
            </div>
        </div>
    </nav>

</body>

</html>