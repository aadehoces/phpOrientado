<?php
 require_once '../database/conexion.php';
 require_once '../database/usuario.php';
 
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
        if ($email==$this->email){
            return true;
        } else {
            return false;
        }
    
    }

    function registro($nom,$ape,$pass,$tel,$email,$dire){
        $user = Usuario::find_by_email($email);
        if($user->email==$email){
            return false;
        } else {
            return true;
            $usuario = Usuario::create(array(
                'nombre' => $nom,
                'apellido' => $ape,
                'pass' => $pass,
                'telefono' => $tel,
                'email' => $email,
                'direccion' => $dire
            ));
            //$usuario = new Usuario();
            //$usuario->nombre=$nom;
            //$usuario->apellido=$ape;
            //$usuario->pass=$pass;
            //$usuario->telefono=$tel;
            //$usuario->email=$email;
            //$usuario->direccion=$dire;
            //$usuario->save();
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

 $prueba = new consulta();
 //$prueba->registro("prueba","numero 1","1234","987654321","prueba2@email.com","wdwd 13");
 $prueba->logeo("prueba@email.com","1234");
 echo "Nombre: ".$prueba->getNombre();
 echo "<br/>";
 echo "Email: ".$prueba->getEmail();

?>