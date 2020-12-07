<?php

// Clase Director (construye un objeto usando la interfaz Builder).

class Cliente {

    private $_nombre;
    private $_apellidos;
    private $_email;
    private $_direccion;
    private $_telefono;
    private $_pizzas= array();

    
    public function __construct($nombre, $apellidos ,$email, $direccion, $telefono) {

        $this->_nombre = $nombre;
        $this->_apellidos = $apellidos;
        $this->_email = $email;
        $this->_telefono = $telefono;
        $this->_direccion = $direccion;        
        
    }

    public function encarga(PrepararPizza $builder, $masa=null, $borde=null, $ingredientes=null) {
        $builder->crearPizza(self::get_lastId());
        $builder->nombrePizza();
        $builder->amasar($masa);
        $builder->prepararBorde($borde);        
        $builder->añadirIngredientes($ingredientes);
        $builder->precioPizza();

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

    public function get_lastId(){
        foreach ($this->_pizzas as $key => $pizza) {
            $id=$pizza->getId();
        }
        if (empty($id)) {
            return 0;
        }else{
            return $id;
        }        
    }

    function getNombre(){
        return $this->_nombre;
    }

    function getApellido(){
        return $this->_apellidos;
    }

    function getTelefono(){
        return $this->_telefono;
    }

    function getEmail(){
        return $this->_email;
    }

    function getDireccion(){
        return $this->_direccion;
    }

}

?>