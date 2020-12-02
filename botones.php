<?php
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