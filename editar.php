<?php 
	include 'model/db.php';

    $id = $_GET['id'];
    $query = $bd->prepare("SELECT * FROM usuarios WHERE id = $id");
    $query->execute([$id]);
    $usuario = $query->fetch(PDO::FETCH_OBJ);

	 if (isset($_POST['update'])) {
        $id = $_GET['id'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $telefono = $_POST['telefono'];
        $direccion = $_POST['direccion'];

        $query = $bd->prepare("UPDATE usuarios set nombre = '$nombre', apellido = '$apellido', telefono = '$telefono', direccion = '$direccion' WHERE id = $id");
        $result = $query->execute([$nombre,$apellido,$telefono,$direccion,$id]);
        header("Location: index.php");
    }
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <title>Document</title>
	 <link rel="stylesheet" href="css/estilos.css">
 </head>
 <body>
 	<h3>Editar Datos</h3>
 	<form action="editar.php?id=<?php echo $id = $_GET['id']; ?>" method="POST">
 		<table>
			<tr>
				<td>Nombre:</td>
				<td><input type="text" name="nombre" value="<?php echo $usuario->nombre; ?>"></td>
			</tr>
			<tr>
				<td>Apellido:</td>
				<td><input type="text" name="apellido" value="<?php echo $usuario->apellido; ?>"></td>
			</tr>
			<tr>
				<td>Teléfono:</td>
				<td><input type="text" name="telefono" value="<?php echo $usuario->telefono; ?>"></td>
			</tr>
			<tr>
				<td>Dirección:</td>
				<td><input type="text" name="direccion" value="<?php echo $usuario->direccion; ?>"></td>
			</tr>
			<tr>
				<td><input type="reset" class="btn btn-restablecer" name=""></td>
				<td><input type="submit" class="btn btn-enviar" name="update" value="Enviar"></td>
			</tr>
		</table>
 	</form>
 </body>
 </html>