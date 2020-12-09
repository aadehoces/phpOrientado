<?php


class botones{
	
	function __construct(){}
	public function val_logueo($email,$contraseña){
		$validar=new validar();
		$mensaje=$validar->val_email($email);
		if ($mensaje=="true") {

			$mensaje=$validar->val_contraseña($contraseña);

			if ($mensaje=="true") {
				$login = new Consultas();
				$logeado=$login->logeo($email,$contraseña);
				if ($logeado=="false") {
					return "Usuario o contrseña incorrecta";

				}else{
					//iniciar session y crear cookir con la id de session
					$sesion=new session();
					$cookie=new Cookies();
					$cookie->create_cookie("id_session",$sesion->get_id());
					//guardar objeto cliente en en unavariable de sesion
					$sesion->setAttribute("cliente", $logeado);
					header('Location: ../index.php');
					}
				}else{
					return $mensaje;
				}
				
			}else{
				return $mensaje;
			}
	}

	public function val_registro($nombre,$apellidos,$email,$direccion,$contraseña,$telefono){
		$validar=new validar();
			$mensaje=$validar->val_nombre($nombre);
			if ($mensaje=="true") {
				$mensaje=$validar->val_apellidos($apellidos);
				if ($mensaje=="true") {
					$mensaje=$validar->val_email($email);
					if ($mensaje=="true") {
						$mensaje=$validar->val_direccion($direccion);
						if ($mensaje=="true") {
							$mensaje=$validar->val_contraseña($contraseña);
							if ($mensaje=="true") {
								$mensaje=$validar->val_telefono($telefono);
								if ($mensaje=="true") {
									//registrar
									$consultas=new Consultas();
									$regis=$consultas->registro($nombre,$apellidos,$email,$direccion,$contraseña,$telefono);
									if ($regis=="false") {
										return "El email ya está registrado.";
									}elseif($regis=="true"){
										header('Location: ../index.php');
									}else{
										return "Ourrió algún error en el registro.";
									}
									
								}else{
									return $mensaje;
								}
							}else{
								return $mensaje;
							}
						}else{
							return $mensaje;
						}
					}else{
						return $mensaje;
					}
				}else{
					return $mensaje;
				}	
			}else{
				return $mensaje;
			}
	}
	public function confirmar($Cliente,$sesion){
		$Cliente->borrarPizzas();
      	$sesion->setAttribute("cliente", $Cliente);
      	header('Location: index.php');
	}
	public function cerrar($sesion){
		$sesion->destroySession();
    	$cookie=new Cookies();
      	$cookie->delete_cookie("id_session"); 
      	header('Location: index.php');
	}
	public function eliminar($Cliente,$sesion){
		$Cliente->deletePizza($_POST['id']);
      	$sesion->setAttribute("cliente", $Cliente);
	}
	public function encargar($Cliente,$pizza,$masa=null,$bordes=null,$Ingredientes=null){
		$Cliente->encarga(new $pizza(),$masa,$bordes,$Ingredientes);
	}
}
?>