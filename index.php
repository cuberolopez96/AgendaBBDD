<?php 
session_start();
require_once "Modules/config.php";
require_once "Modules/Entity/ConnectDB.php";
require_once "Modules/Entity/Contactos.php";
require_once "Modules/Entity/Usuario.php";
require_once "Modules/functions.php";
cargarVariablesSesion();

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 	<link rel="stylesheet" href="Resources/css/init.css">
 </head>
 <body>

 	<?php require_once 'Modules/Route.php'; ?>
 </body>
 </html>