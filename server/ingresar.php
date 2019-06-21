<?php
include("connection.php");

$codigo=$_POST["codigo"];
$credito=$_POST["credito"];
$nombre=$_POST["nombre"];


mysqli_set_charset($connection,"utf8");


$ingresaAsignatura = "INSERT INTO asignatura (codigo, credito, nombre) VALUES ('$codigo', '$credito', '$nombre')";

$queryAsignatura = "select * from asignatura";


    $resultadoAsignatura = mysqli_query($connection, $ingresaAsignatura);
    $resultadoQueryAsignatura = mysqli_query($connection, $queryAsignatura);


    $array = array();
    while($fila = mysqli_fetch_array($resultadoQueryAsignatura)){
    $array[] = $fila;
    }

   echo json_encode($array);


// if ($resultadoCasa) {
//   echo json_encode($array);
// } else {
//   echo "Error: " . $resultadoCasa . " --> " . $connection->error;
// }