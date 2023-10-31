<?php
    require_once('php_librarys/bd.php');

    $ciudades = selectCiudades();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include_once('./php_partials/menu.php') ?>

    <div class="container">
        <form action="./php_controllers/ciudadController.php" method="POST">
            <div class="mb-3">
                <label for="id_ciudad" class="form-label">Identificador</label>
                <input type="text" class="form-control" id="id_ciudad" name="id_ciudad" placeholder="Identificador de la ciudad">
            </div>
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre de la ciudad">
            </div>
            <button type="button" class="btn btn-primary" name="Insert">Aceptar</button>
        </form>
    </div>
</body>
</html>