<?php
class botones
{
	
	function __construct(){}


	public function registro(){
		
	}
	public function login($email,$contraseña){

		$consulta = new consulta();
		$consulta->logeo($email,$contraseña);
		
	}
}


?>