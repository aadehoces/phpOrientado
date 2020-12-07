<?php

 require_once '../database/conexion.php';
 
 class conexionDB {

    private $nombre;
    private $apellido;
    private $telefono;
    private $email;
    private $direccion;

    function __construct() {}

    function logeo($email, $pass){
        $db = ConnectDb::getInstance();
        $conexion=$db->getConnection();
        $consulta=$conexion->prepare('SELECT * FROM usuario where email= :email and pass= :pass');
        $consulta->bindValue(':email',$email);
        $consulta->bindValue(':pass',$pass);
        $consulta->execute();
        $users = $consulta->fetchAll(PDO::FETCH_OBJ);
        $numero_registro=$consulta->rowCount();
        if($numero_registro!=0){
            foreach($users as $value){
                $this->nombre=$value->nombre;
                $this->apellido=$value->apellido; 
                $this->telefono=$value->telefono;
                $this->email=$value->direccion;
                $this->direccion=$value->direccion;
            }
        } else {
            return false;
        }
    
    }

    function registro($nom,$ape,$pass,$tel,$email,$dire){
        $db = ConnectDb::getInstance();
        $conexion=$db->getConnection();
        $consulta1=$conexion->prepare('SELECT * FROM usuario where email= :email');
        $consulta1->bindValue(':email',$email);
        $consulta1->execute();
        $numero_registro=$consulta1->rowCount();
        //Si ya hay una cuenta con ese correo no se crea la cuenta
        if($numero_registro!=0){
            return false;
        }
        //Si no hay nadie con ese correo se puede crear la cuenta
        else {
            $consulta2=$conexion->prepare('INSERT INTO usuario (nombre,apellido,pass,email,telefono,direccion)
             VALUES (:nombre, :apellido, :pass, :email, :telefono, :direccion)');
            $consulta2->bindValue(':nombre',$nom);
            $consulta2->bindValue(':apellido',$ape);
            $consulta2->bindValue(':pass',$pass);
            $consulta2->bindValue(':email',$email);
            $consulta2->bindValue(':telefono',$tel);
            $consulta2->bindValue(':direccion',$dire);
            $consulta2->execute();
        }
    }

    function getNombre(){
        return $this->nombre;
    }

    function getApellido(){
        return $this->apellido;
    }

    function getTelefono(){
        return $this->telefono;
    }

    function getEmail(){
        return $this->email;
    }

    function getDireccion(){
        return $this->direccion;
    }

}

?>