<?php 
if (isset($_POST['register'])) {
	$bandera = true;
	if(!isset($_POST['username'])){
		$bandera =false;
	}
	if (!isset($_POST['password'])) {
		$bandera = false;
	}
	if(!isset($_POST['cpassword'])){
		$bandera = false;
	}
	if($_POST['cpassword']!= $_POST['password']){
		$bandera = false;
	}
	if ($bandera == true) {
		$usuario = new Usuario($_POST['username'],$_POST['password']);
		header('Location: index.php?page=login');
	}
}
 ?>
<div>
	<header><h3>Register</h3></header>
	<div class="centrado">
		<form action="index.php?page=register" method="post">
			<label for="">Username</label><input type="text" name="username">
			<label for="">Password</label><input type="password" name="password">
			<label for="">Verify password</label><input type="password" name="cpassword" >
			<input type="submit" class="btn btn-block " name="register" value="Registrarse">
		</form>
	</div>
</div>