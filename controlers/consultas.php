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
            return true;
        } else {
            return false;
        }
    
    }

    function registro($nom,$ape,$pass,$tel,$email,$dire){
        $db = ConnectDb::getInstance();
        $conexion=$db->getConnection();
        $consulta=$conexion->prepare('insert into usuario (nombre,apellido,pass,email,telefono,direccion)
         values (?,?,?,?,?,?)');
        $consulta->execute([$nom,$ape,$pass,$email,$tel,$dire]);
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

//$prueba=new conexionDB();
//$prueba->registro("prueba","numero 2","1234","987654321","prueba2@email.com","kbjdjwd 12");
//$prueba->logeo("prueb@email.com","1234");
//echo($prueba->getDireccion());
//echo"<br/>";

?>