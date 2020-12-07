<?php
class validar
{
	
	function __construct(){}
	public function val_email($email=null){
		if (empty($email)) {
			return "Introduce email";
		}else{
			if (preg_match("/\S+@\S+\.\S+/",$email)) {
  				return true;
			}else{
				return "Email no válido";
			}
		}
	}
	public function val_contraseña($contraseña=null){
		if (empty($contraseña)) {
			return "Introduce contraseña";
		}else{
			if (preg_match("/(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8,16}$/",$contraseña)) {
  				return true;
			}else{
				return "Contraseña no válida";
			}
		}
	}
	public function val_nombre($nombre=null){
		if (empty($nombre)) {
			return "Introduce nombre";
		}else{
			if (preg_match("/^[A-Z]{1}[a-z]{1,}$/",$nombre)) {
  				return true;
			}else{
				return "Nombre no válido";
			}
		}
	}
	public function val_apellidos($apellidos=null){
		if (empty($apellidos)) {
			return "Introduce Apellidos";
		}else{
			if (preg_match("/^([A-Z]{1}[a-z]{1,}\s?){1,}$/",$apellidos)) {
  				return true;
			}else{
				return "Apellidos no válidos";
			}
		}
	}
	public function val_direccion($direccion=null){
		if (empty($direccion)) {
			return "Introduce Direccion";
		}else{
  				return true;
		}
	}
	public function val_telefono($telefono=null){
		if (empty($telefono)) {
			return "Introduce telefono";
		}else{
			if (preg_match("/^[0-9]{9}$/",$telefono)) {
  				return true;
			}else{
				return "Telefono no válidos";
			}
		}
	}
}
?>