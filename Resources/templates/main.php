<?php 
comprobarPermisos();

$contactos = Contacto::getContactos();
$contactos = array_reverse($contactos);
$vcontactos = array();
foreach ($contactos as $contacto) {
	if ($contacto['idAgente']==$_SESSION['usuario']['id']) {
		$vcontactos[]= $contacto;
	}
}
 ?>
<div class="row">
	<header>
		<h2>
			Agenda con Base de datos
		</h2>

	</header>
	<div class="centrado">
		<form action="index.php" method='post' class="form-inline">
		<label for="">Buscar</label>
		<input type="text">
			
		</form>
		<a href="index.php?page=add" class="btn right">+</a>
	</div>
	<div>
		<table class="table">
			<tr class="header_table">
				<th>Nombre</th>
				<th>Correo</th>
				<th>Teléfono</th>
			</tr>
			<?php foreach ($vcontactos as  $contacto): ?>
				<tr>
					<td><?php echo $contacto['nombre']; ?> </td>
					<td><?php echo $contacto['correo']; ?></td>
					<td><?php echo $contacto['telefono']; ?> </td>
				</tr>
				
			<?php endforeach ?>
		</table>
	</div>
</div>