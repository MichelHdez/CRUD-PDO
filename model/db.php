<?php 

	$usuario = 'root';
	$password = '';
	$db = 'usuarios';

	try {
		$bd = new PDO('mysql:host=localhost;dbname='.$db, $usuario, $password);
	} catch (Exception $e) {
		echo "Error de conexión " .$e->getMessage();
	}

 ?>