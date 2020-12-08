<?php
require_once 'validacion.php';
require_once 'consultas.php';
//validar datos
	if ($_POST) {
		if (isset($_POST['registro'])) {
			$validar=new validar();
			$mensaje=$validar->val_nombre($_POST['nombre']);
			if ($mensaje=="true") {
				$mensaje=$validar->val_apellidos($_POST['apellidos']);
				if ($mensaje=="true") {
					$mensaje=$validar->val_email($_POST['email']);
					if ($mensaje=="true") {
						$mensaje=$validar->val_direccion($_POST['direccion']);
						if ($mensaje=="true") {
							$mensaje=$validar->val_contraseña($_POST['contraseña']);
							if ($mensaje=="true") {
								$mensaje=$validar->val_telefono($_POST['telefono']);
								if ($mensaje=="true") {
									//registrar
									$consultas=new Consultas();
									$mensaje=$consultas->registro($_POST['nombre'],$_POST['apellidos'],$_POST['contraseña'],$_POST['telefono'],$_POST['email'],$_POST['direccion']);
									if ($mensaje=="false") {
										$mensaje="El email ya está registrado.";
									}elseif($mensaje=="true"){
										header('Location: ../index.php');
									}else{
										$mensaje="Ourrió algún error en el registro.";
									}
									
								}
							}
						}
					}
				}		
			}
		}
	}
	
?>