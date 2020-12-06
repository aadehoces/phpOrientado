<?php
require_once 'Cookie.php';
class botones
{
	
	function __construct(){}


	public function cerrar(){
		$cookie=new Cookies();
		$cookie->delete_cookie("id_session");
	}
}


?>