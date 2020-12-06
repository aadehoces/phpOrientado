<?php
require_once 'validacion.php';
require_once 'consultas.php';
require_once 'Sessions.php';
require_once 'Cookie.php';
	if ($_POST) {
		if (isset($_POST['login'])) {
			$validar=new validar();
			$mensaje=$validar->val_email($_POST['email']);
			if ($mensaje=="true") {
				$mensaje=$validar->val_contraseña($_POST['contraseña']);
				if ($mensaje=="true") {
					$login = new consulta();
					$logeado=$login->logeo($_POST['email'],$_POST['contraseña']);
					if ($logeado=="true") {
						$sesion=new session();
						$cookie=new Cookies();
						$cookie->create_cookie("id_session",$sesion->get_id());
						echo $sesion->get_id();
						//header('Location: ../index.php');
					}else{
						$mensaje="Usuario o contrseña incorrecta";
					}
				}
				
			}
		}
	}
?>