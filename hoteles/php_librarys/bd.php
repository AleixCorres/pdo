<?php

function openBD(){
    
    $servername = "localhost";
    $username = "root";
    $password = "mysql";

    
    $conexion = new PDO("mysql:host=$servername;dbname=hoteles_dwes", $username, $password);
    // set the PDO error mode to exception
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexion->exec("set names utf8");
    
    return $conexion;
}

function closeBD(){
    return null;
}
function selectCiudades(){

    $conexion = openBD();

     $sentenciaText = "select * from ciudades";

    $sentencia = $conexion->prepare($sentenciaText);
    $sentencia->execute();

    $resultado = $sentencia->fetchAll();

    $conexion = closeBD();

    return $resultado;

}

function insertCiudad($id_ciudad, $nombre){
    $conexion = openBD();

    $sentenciaText = "insert into ciudades (id_ciudad, nombre) values (:id_ciudad, :nombre)";

    $sentencia = $conexion->prepare($sentenciaText);
    $sentencia->bindParam(':id_ciudad', $id_ciudad);
    $sentencia->bindParam(':nombre', $nombre);
    $sentencia->execute();

    $conexion = closeBD();
}

function insertString($cadena) {
    $conexion = openBD();
    $sentenciaText = "INSERT INTO tu_tabla (tu_columna) VALUES (:cadena)";
    
    $sentencia = $conexion->prepare($sentenciaText);
    $sentencia->bindParam(':cadena', $cadena);
    
    $sentencia->execute();
    closeBD($conexion);
}

function deleteChainByCIF($cif) {
    $conexion = openBD();
    $sentenciaText = "DELETE FROM tu_tabla WHERE cif = :cif";
    
    $sentencia = $conexion->prepare($sentenciaText);
    $sentencia->bindParam(':cif', $cif);
    
    $sentencia->execute();
    closeBD($conexion);
}

?>