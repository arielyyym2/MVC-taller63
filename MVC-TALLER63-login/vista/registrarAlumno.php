<?php include __DIR__ . '/layout/header.php'; ?>
<div class="container mt-5">

    <div class="row justify-content-center">
        <div class="col-md-4 col-1g-5">

        <h4>Registro de alumnos</h4>

        <form action="index.php?accion=guardarAlumno" method="post">
        
        <div class="mb-2">
            <label class="form-label" for="cedula">Cedula</label>
            <input class="form-control form-control-sm" type="text" name="cedula" required>
        </div>

        <div class="mb-2">
            <label class="form-label" for="nombre">Nombre</label>
            <input class="form-control form-control-sm" type="text" name="nombre" required>
        </div>

        <div class="mb-2">
            <label class="form-label" for="apellido">Apellido</label>
            <input class="form-control form-control-sm" type="text" name="apellido" required>
        </div>

        <div class="mb-2">
            <label class="form-label" for="correo">Correo</label>
            <input class="form-control form-control-sm" type="text" name="correo" required>
        </div>

        <div class="mb-2">
            <label class="form-label" for="telefono">Telefono</label>
            <input class="form-control form-control-sm" type="text" name="telefono" required>
        </div>

        <div class="mb-2">
            <label class="form-label" for="fechaNacimiento">Fecha Nacimiento</label>
            <input class="form-control form-control-sm" type="text" name="fechaNacimiento" required>
        </div>

        <?php if (isset($error)) :   ?>
                <div class="alert alert-danger"> <?php echo $error ?></div>
        <?php endif   ?>


        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary btn-sm">Guardar</button>
        </div>

        </form>

        </div>
    </div>
    
</div>



<?php include __DIR__ . '/layout/footer.php'; ?>