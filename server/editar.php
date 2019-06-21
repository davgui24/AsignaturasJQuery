<?php
include("connection.php");

$codigo=$_POST["codigo2"];
$credito=$_POST["credito2"];
$nombre=$_POST["nombre2"];

mysqli_set_charset($connection,"utf8");


$actualizaAsignatura = "UPDATE  asignatura SET credito='$credito', nombre='$nombre' WHERE codigo='$codigo'";

    $queryAsignatura = "select * from asignatura";

    $resultadoAsignatura = mysqli_query($connection, $actualizaAsignatura);

    $resultadoQueryAsignatura = mysqli_query($connection, $queryAsignatura);


    $array = array();
    while($fila = mysqli_fetch_array($resultadoQueryAsignatura)){
    $array[] = $fila;
    }

   echo json_encode($array);