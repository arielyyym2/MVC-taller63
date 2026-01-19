<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesion</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body class="bg-light">
    <div class="container mt-5" style="max-width: 400px;">
        <h3 class="mb-4 text-center">Iniciar Sesion</h3>
        <form action="/index.php?accion=login" method="post">

            <div class="mb-3">
                <label for="usuario" class="form-label">Usuario:</label>
                <input type="text" class="form-control" name="usuario" required>
            </div>

            <div class="mb-3">
                <label for="clave" class="form-label">Clave:</label>
                <input type="password" class="form-control" name="clave" required>
            </div>


            <?php if (isset($error)) :   ?>
                <div class="alert alert-danger"> <?php echo $error ?></div>
            <?php endif ?>

            <div>
                <button type="submit" class="btn btn-primary w-100">Ingresar</button>
            </div>

        </form>
    </div>

</body>

</html>