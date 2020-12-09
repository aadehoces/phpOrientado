<?php
require_once 'validacion.php';
require_once 'consultas.php';
require_once 'Sessions.php';
require_once 'Cookie.php';
require_once 'Cliente.php';
require_once 'botones.php';
//validar datos
	if ($_POST) {
		if (isset($_POST['login'])) {
			
			$boton=new botones();
			
			$mensaje=$boton->val_logueo($_POST['email'],$_POST['contraseña']);
		}
	}
	
?>