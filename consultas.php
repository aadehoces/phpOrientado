<?php
 require_once 'conexion.php';

 class consulta {

    private $nombre;
    private $apellido;
    private $telefono;
    private $email;
    private $direccion;

    function logeo($email, $pass){
        $usuarios = usuario::find_by_sql('SELECT * FROM usuario WHERE email = ? 
            AND pass = ? ;',array($email,$pass));
        foreach($usuarios as $usuario){
            $this->nombre=$usuario->nombre;
            $this->apellido=$usuario->apellido;
            $this->telefono=$usuario->telefono;
            $this->email=$usuario->email;
            $this->direccion=$usuario->direccion;
        }
    }

    function registro($nom,$ape,$pass,$tel,$email,$dire){
        $usuario = new Usuario();
        $usuario->nombre=$nom;
        $usuario->apellido=$ape;
        $usuario->pass=$pass;
        $usuario->telefono=$tel;
        $usuario->email=$email;
        $usuario->direccion=$dire;
        $usuario->save();
    }

    function getNombre(){
        echo $this->nombre;
    }

    function getApellido(){
        echo $this->apellido;
    }

    function getTelefono(){
        echo $this->telefono;
    }

    function getEmail(){
        echo $this->email;
    }

    function getDireccion(){
        echo $this->direccion;
    }

 }

 $prueba = new consulta();
 $prueba->registro("prueba","numero 2","1234","1234567","prueba2@email.com","wdwd 13");
 $prueba->logeo("prueba2@email.com","1234");
 $prueba->getNombre();
 $prueba->getEmail();

?>