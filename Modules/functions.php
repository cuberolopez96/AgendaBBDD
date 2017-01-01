<?php 
	function cargarVariablesSesion(){
		if(!isset($_SESSION['usuario'])){
			$_SESSION['usuario']="";
		}
	}
	function comprobarPermisos(){
		if(empty($_SESSION['usuario'])){
			header("Location: index.php?page=login");
		}
	}
 ?>