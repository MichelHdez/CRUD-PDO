<?php 

	$usuario = 'inserte su usuario';
	$password = 'inserte la cpntraseña';
	$db = 'inserte la bd';

	try {
		$bd = new PDO('mysql:host=localhost;dbname='.$db, $usuario, $password);
	} catch (Exception $e) {
		echo "Error de conexión " .$e->getMessage();
	}

 ?>
