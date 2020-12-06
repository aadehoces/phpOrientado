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

    public function encarga(PrepararPizza $builder, $masa=null, $borde=null, $ingredientes=null) {
        
        $builder->crearPizza();
        $builder->nombrePizza();
        $builder->amasar($masa);
        $builder->prepararBorde($borde);        
        $builder->añadirIngredientes($ingredientes);

        $this->_pizzas[]=$builder->getPizza();

    }
    
    public function getPizzas() {
        return $this->_pizzas;
        
    }

    public function contarPizzas() {
        $count=0;
        foreach ($this->_pizzas as $key => $pizza) {
            $count++;
        } 
        return $count;
    }
    
    public function deletePizza($IDpizza) {              
        foreach ($this->_pizzas as $key => $pizza) {              
            if ($pizza->_IDpizza == $IDpizza) {
                $clave = ($pizza->_IDpizza-1);         
                unset($this->_pizzas[$clave]); 
            }      
        }
    }

}

?>