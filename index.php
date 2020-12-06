<?php
require_once 'controlers/botones.php';
require_once 'controlers/Sessions.php';
if ($_POST) {
	if (isset($_POST["Cerrar"])) {
		$botones=new botones();
		$botones->cerrar();

	}

}
if (isset($_COOKIE["id_session"])) {
	$sesion=new Session($_COOKIE["id_session"]);
	echo $sesion->get_id();
	include 'Templates/cabecera.php';
	include 'Templates/tienda.php';
	include 'Templates/footer.php';
}else{
	header('Location: Templates/sesion.php');
}

?>