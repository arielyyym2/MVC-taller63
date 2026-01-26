<?php include __DIR__ . '/layout/header.php';  ?>

<div class="container mt-5">
    <h2 class="mb-3">listado de Alumnos</h2>
    <p class="text-muted">Cantidad de registros: <?php echo $cantidad; ?></p>

    <table class="table table-bordered border-primary table-hover table-sm">
         <thead class="table-darck">
            <tr>
                <th>ID</th>
                <th>Cedula</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Correo</th>
                <th>Telefono</th>
                <th>Fecha de Nacimiento</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($alumnos as $fila): ?>
                <tr>
                    <td><?php echo $fila['Id']; ?></td>
                    <td><?php echo $fila['Cedula']; ?></td>
                    <td><?php echo $fila['Nombres']; ?></td>
                    <td><?php echo $fila['Apellidos']; ?></td>
                    <td><?php echo $fila['Correo']; ?></td>
                    <td><?php echo $fila['Telefono']; ?></td>
                    <td><?php echo $fila['FechaNacimiento']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php include __DIR__ . '/layout/footer.php'; ?>