<?php
require_once 'validacion.php';
require_once 'consultas.php';
require_once 'Sessions.php';
require_once 'Cookie.php';
require_once 'Cliente.php';
	if ($_POST) {
		if (isset($_POST['login'])) {
			$validar=new validar();
			$mensaje=$validar->val_email($_POST['email']);
			if ($mensaje=="true") {
				$mensaje=$validar->val_contraseña($_POST['contraseña']);
				if ($mensaje=="false") {
					$login = new conexionDB();
					$logeado=$login->logeo($_POST['email'],$_POST['contraseña']);
					if ($logeado=="false") {
						$mensaje="Usuario o contrseña incorrecta";
					}else{
						$sesion=new session();
						$cookie=new Cookies();
						$cookie->create_cookie("id_session",$sesion->get_id());
						$cliente=new cliente();
						$sesion->setAttribute("cliente", $cliente);
						header('Location: ../index.php');
					}
				}
				
			}
		}
	}
?>