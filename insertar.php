<?php 
	include 'model/db.php';

	if (isset($_POST['submit'])) {
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$telefono = $_POST['telefono'];
	$direccion = $_POST['direccion'];

	$query = $bd->prepare("INSERT INTO usuarios (nombre, apellido, telefono, direccion) VALUES(?,?,?,?)");
	$result = $query->execute([$nombre,$apellido,$telefono,$direccion]);
	if ($result === true) {
		header('Location: index.php');
	} else {
		echo "<h2>Datos no ingresados</h2>";
	}
}
 ?>