<?php 
	include 'model/db.php';

	if (isset($_GET['id'])) {
		$id = $_GET['id'];
	$query = $bd->prepare("DELETE FROM usuarios WHERE id = $id");
	$result = $query->execute($_GET[$id]);

	header("Location: index.php");
	}

 ?>