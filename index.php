<?php include 'model/db.php'; 
	
	$query = $bd->query("SELECT * FROM usuarios ORDER BY id");
	$usuarios = $query->fetchAll(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CRUD</title>
	<link rel="stylesheet" href="css/estilos.css">
</head>
<body>
	<h1>Prospectos</h1>
	<table>
		<tr>
			<td>ID</td>
			<td>Nombre</td>
			<td>Apellido</td>
			<td>Teléfono</td>
			<td>Dirección</td>
		</tr>

		<?php 
			foreach ($usuarios as $dato) {
		?>
			<tr>
				<td><?php echo $dato->id; ?></td>
				<td><?php echo $dato->nombre; ?></td>
				<td><?php echo $dato->apellido; ?></td>
				<td><?php echo $dato->telefono; ?></td>
				<td><?php echo $dato->direccion; ?></td>
				<td><a class="btn btn-editar" href="editar.php?id=<?php echo $dato->id; ?>">Editar</a></td>
				<td><a class="btn btn-eliminar" href="eliminar.php?id=<?php echo $dato->id; ?>">Eliminar</a></td>
			</tr>
		<?php
			}
		 ?>
	</table>

	<!-- Inicio Insert -->
	<hr>
	<h3>Ingresar Prospectos</h3>
	<form action="insertar.php" method="POST">
		<table>
			<tr>
				<td>Nombre:</td>
				<td><input type="text" name="nombre" required></td>
			</tr>
			<tr>
				<td>Apellido:</td>
				<td><input type="text" name="apellido" required></td>
			</tr>
			<tr>
				<td>Teléfono:</td>
				<td><input type="text" name="telefono" required></td>
			</tr>
			<tr>
				<td>Dirección:</td>
				<td><input type="text" name="direccion" required></td>
			</tr>
			<tr>
				<td><input type="reset" class="btn btn-restablecer" name=""></td>
				<td><input type="submit" class="btn btn-enviar" name="submit" value="Enviar"></td>
			</tr>
		</table>
	</form>
</body>
</html>