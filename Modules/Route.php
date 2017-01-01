<?php 
if(!isset($_GET['page'])){
	require_once 'Resources/templates/main.php';
}else{
	require_once 'Resources/templates/'.$_GET['page'].'.php';
}