<?php
require_once 'validacion.php';
require_once 'consultas.php';
require_once 'Sessions.php';
require_once 'Cookie.php';
require_once 'Cliente.php';
//validar datos
	if ($_POST) {
		if (isset($_POST['login'])) {
			$validar=new validar();
			$mensaje=$validar->val_email($_POST['email']);
			if ($mensaje=="true") {
				$mensaje=$validar->val_contraseña($_POST['contraseña']);
				if ($mensaje=="false") {
					$login = new Consultas();
					$logeado=$login->logeo($_POST['email'],$_POST['contraseña']);
					if ($logeado=="false") {
						$mensaje="Usuario o contrseña incorrecta";
					}else{
						//iniciar session y crear cookir con la id de session
						$sesion=new session();
						$cookie=new Cookies();
						$cookie->create_cookie("id_session",$sesion->get_id());
						//guardar objeto cliente en en unavariable de sesion
						$sesion->setAttribute("cliente", $logeado);
						header('Location: ../index.php');
					}
				}
				
			}
		}
	}
	
?>