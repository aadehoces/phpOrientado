<?php

class Cliente {

    private $_clienteID;
    private $_nombre;
    private $_email;
    private $_contraseña;
    private $_direccion;
    private $_telefono;    
    static $_contador=0;

    public function __construct($nombre, $email, $contraseña, $direccion, $telefono) {
        self::$contador += 1; 
        $this->clienteID = self::$contador; 
        $this->Aclientes[$this->clienteID] = array();

        $this->$_nombre = $nombre;
        $this->$_email = $email;
        $this->$_nombre = $nombre;
        $this->$_contraseña = $contraseña;
        $this->$_direccion = $direccion;
        
    }

    public function encarga(PrepararPizza $builder, $masa=null, $borde=null, $ingredientes=null) {
        
        $builder->crearPizza();

        $builder->amasar($masa);
        $builder->prepararBorde($borde);        
        $builder->añadirIngredientes($ingredientes);

        $builder->getPizza();

        $builder->añadirArray();        

        $builder->getPizzas();

        //Para comprobar que funciona
        print_r($builder->getPizzas());
    }

}

?>