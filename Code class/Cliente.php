<?php

// Clase Director (construye un objeto usando la interfaz Builder).

class Cliente {

    private $_clienteID;
    private $_nombre;
    private $_email;
    private $_contraseña;
    private $_direccion;
    private $_telefono;    
    static $_contador=0;
    private $_pizzas= array();

    /*
    public function __construct($nombre, $email, $contraseña, $direccion, $telefono) {
        self::$contador += 1; 
        $this->clienteID = self::$contador; 
        $this->Aclientes[$this->clienteID] = array();

        $this->_nombre = $nombre;
        $this->_email = $email;
        $this->_nombre = $nombre;
        $this->_contraseña = $contraseña;
        $this->_direccion = $direccion;
    }
    */

    public function encarga(PrepararPizza $builder, $nombre=null, $masa=null, $borde=null, $ingredientes=null) {
        
        $builder->crearPizza();
        $builder->nombrePizza($nombre);
        $builder->amasar($masa);
        $builder->prepararBorde($borde);        
        $builder->añadirIngredientes($ingredientes);

        $this->_pizzas[]=$builder->getPizza();
        
    }
    
    public function getPizzas() {
        return $this->_pizzas;        
    }
    
}

?>