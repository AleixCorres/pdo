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

    $sentecnia = $conexion->prepare($sentenciaText);
    $sentecnia->execute();

    $resultado = $sentecnia->fetchAll();

    $conexion = closeBD();

    return $resultado;

}

?>