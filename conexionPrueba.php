<?php

require_once ('database/database.php');

class conexionDB extends DB {

    private $nombre;
    private $apellido;
    private $pass;
    private $telefono;
    private $email;
    private $direccion;

    function __construct() {}

    function getDireccion($email,$pass){
        try {
            $db = DB::getInstance();
            $consulta=$db->prepare('SELECT direccion FROM usuario where email= :email and pass= :pass');
            $consulta->bindValue(':email',$email);
            $consulta->bindValue(':pass',$pass);
            $consulta->execute();
            $this->direccion=$consulta->fetchColumn();
            echo $this->direccion;
        }
        catch (Exception $e) {
            print $e->getMessage();
        }
    }

    function getTelefono($email,$pass){
        try {
            $db = DB::getInstance();
            $consulta=$db->prepare('SELECT telefono FROM usuario where email= :email and pass= :pass');
            $consulta->bindValue(':email',$email);
            $consulta->bindValue(':pass',$pass);
            $consulta->execute();
            $this->telefono=$consulta->fetchColumn();
            echo $this->telefono;
        }
        catch (Exception $e) {
            print $e->getMessage();
        }
    }


}

$prueba=new conexionDB();
$prueba->getDireccion("prueba@email.com","1234");
echo"<br/>";
$prueba->getTelefono("prueba@email.com","1234");
?>