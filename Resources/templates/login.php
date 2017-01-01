<?php 
	if(isset($_POST['login'])){
		$bandera = true;
		if(!isset($_POST['username'])){
			$bandera = false;
		}
		if(!isset($_POST['password'])){
			$bandera = false;
		}
		if($bandera == true){

			Usuario::login($_POST['username'],md5($_POST['password']));
			
		}
	}
 ?>
<div>
	<header>
		<h3>Login</h3>
	</header>
	<div class="centrado">
		<form action="index.php?page=login" method="post">
			<label for="">Username</label>
			<input type="text" name="username">
			<label for="">Password</label>
			<input type="password" name="password">
			<input type="submit" name="login" value="Login" class="btn btn-block">
			<a href="index.php?page=register" class="text-pink">¿No tienes cuenta?| Regístrate</a>
		</form>
	</div>
</div>
