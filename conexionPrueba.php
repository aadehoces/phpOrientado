<?php

require_once ('database/database.php');

try {
	$db = DB::getInstance();

    $stmt = $db->prepare('SELECT direccion FROM usuario where nombre= :nombre and pass= :pass');
    $stmt->bindValue(':nombre','prueba');
    $stmt->bindValue(':pass','1234');
    $stmt->execute();
    $numero_registro=$stmt->rowCount();
    if($numero_registro!=0){
        echo "si";
    }
    echo($stmt->fetchColumn());

} catch (Exception $e) {
	print $e->getMessage();
}