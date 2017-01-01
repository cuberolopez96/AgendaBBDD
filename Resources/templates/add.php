<?php 
	if (isset($_POST['add'])) {
		$bandera = true;
		if(!isset($_POST['nombre'])){
			$bandera = false;
		}
		if (!isset($_POST['correo'])) {
			$bandera = false;
		}
		if (!isset($_POST['telefono'])) {
			$bandera = false;
		}
		if ($bandera == true) {
			$contacto = new Contacto($_SESSION['usuario']['id'],$_POST['nombre'],$_POST['correo'],$_POST['telefono']);
			header("Location: index.php");
		}
	}
 ?>
<header>
	<h3>Add contactos</h3>
</header>

<div class="centrado">
	<form action="index.php?page=add" method="post">
		
		<label for="">Nombre</label>
		<input type="text" name="nombre">
		<label for="">Correo</label>
		<input type="text" name="correo">
		<label for="">Telefono</label>
		<input type="text" name="telefono">
		<input type="submit" name="add" value="Add" class="btn btn-block">
	</form>
</div>