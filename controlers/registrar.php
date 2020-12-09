<?php
require_once 'validacion.php';
require_once 'consultas.php';
require_once 'botones.php';
//validar datos
	if ($_POST) {
		if (isset($_POST['registro'])) {
			$boton=new botones();
			
			$mensaje=$boton->val_registro($_POST['nombre'],$_POST['apellidos'],$_POST['email'],$_POST['direccion'],$_POST['contraseña'],$_POST['telefono']);
		}
	}
	
?>