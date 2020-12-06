<?php
require_once 'botones.php';
require_once 'validacion.php';
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
								//registrar
							}
						}
					}
				}		
			}
		}
	}
?>