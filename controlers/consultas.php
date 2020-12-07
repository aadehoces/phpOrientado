<?php

 require_once '../database/conexion.php';
 require_once 'Cliente.php';
 
 class Consultas {

    private $nombre;
    private $apellido;
    private $telefono;
    private $email;
    private $direccion;

    function __construct() {}

    function logeo($email, $pass){
        $db = ConnectDb::getInstance();
        $conexion=$db->getConnection();
        //Usamos el email y la password para comprobar si los datos son correctos
        $consulta=$conexion->prepare('SELECT * FROM usuario where email= :email and pass= :pass');
        $consulta->bindValue(':email',$email);
        $consulta->bindValue(':pass',$pass);
        $consulta->execute();
        $users = $consulta->fetchAll(PDO::FETCH_OBJ);
        $numero_registro=$consulta->rowCount();
        //Si el select devuelve algun registro, se guardan los 
        // datos del select en las variables
        if($numero_registro!=0){
            foreach($users as $value){
                $this->nombre=$value->nombre;
                $this->apellido=$value->apellido; 
                $this->telefono=$value->telefono;
                $this->email=$value->direccion;
                $this->direccion=$value->direccion;
            }
            //Con los datos del SELECT creamos el objeto cliente
            $cliente = new Cliente($this->nombre,$this->apellido,$this->email,
             $this->direccion,$this->telefono);
            return $cliente;
            
        } else {
            return false;
        }
    
    }

    function registro($nom,$ape,$pass,$tel,$email,$dire){
        $db = ConnectDb::getInstance();
        $conexion=$db->getConnection();
        //Vemos si el email introducido ya existe
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

}

echo date("H:i:s", strtotime("+30 minutes"));

?>