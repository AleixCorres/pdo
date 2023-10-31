<?php

    require_once('../php_librarys/bd.php');

    if (isset($_POST['issert'])) {
        insertCiudad($_POST['id_ciudad'], $_POST['nombre']);
        
        header('Location: ../ciudades.php');
        exit();
    }

?>
