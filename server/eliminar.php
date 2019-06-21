<?php
include("connection.php");

$codigo=$_GET["codigo"];

mysqli_set_charset($connection,"utf8");


$eliminaAsignatura = "DELETE FROM  asignatura WHERE codigo='$codigo'";



$resultadoAsignatura = mysqli_query($connection, $eliminaAsignatura);






if($resultadoAsignatura){
	?>
	<script>
		alert('La Asignatura se eliminó correctamente')
	</script>
	<?php
	header('Location: ../');
}else{
	echo 'No mse pudo eliminar';
}
