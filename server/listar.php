<?php
include("connection.php");



mysqli_set_charset($connection,"utf8");



$queryAsignatura = "select * from asignatura";

    $resultadoQueryAsignatura = mysqli_query($connection, $queryAsignatura);


    $array = array();
    while($fila = mysqli_fetch_array($resultadoQueryAsignatura)){
    $array[] = $fila;
    }

   echo json_encode($array);