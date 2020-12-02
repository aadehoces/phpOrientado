<?php
/**
 * 
 */
class botones
{
	
	function __construct(argument)
	{
		# code...
	}
	public function registro(){
		$cliente = Cliente::create(array(
    'nombre' => 'Carlos',
    'apellido' => 'Nano',
    'email' => 'nano@email.com',
    'contrasena' => '1234'
 ));
	}
}
if ($_POST) {
	if (isset($_POST['login'])) {
		echo "login";
	}
	if (isset($_POST['registro'])) {
		echo "registro";
	}
}else{
	header('Location: index.php');
}

?>