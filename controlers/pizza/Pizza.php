<?php

//Clase Producto (El objeto bajo construcción - Métodos Propios).

class Pizza {

    public $_IDpizza;
    private $_nombre;
    private $_masa;
    private $_borde;
    private $_ingredientes = [];
    private $_precio;
    static $_contador=0;

    public function __construct($id) {
        $this->_IDpizza = $id+1;       
    }

    public function getId(){
        return $this->_IDpizza;
    }

    public function setNombre($nombre) {        
        $this->_nombre = $nombre;
    }
    public function getNombre() {        
        return $this->_nombre;
    }
    
    public function setMasa($masa) {
        $this->_masa = $masa;
    }
     public function getMasa() {        
        return $this->_masa;
    }

    public function setBorde($borde) {
        $this->_borde = $borde;
    }
    public function getBorde() {        
        return $this->_borde;
    }

    public function setIngredientes($ingredientes) {
        $this->_ingredientes = $ingredientes;
    } 
    public function getIngredientes(){
        return $this->_ingredientes;
    }     

    public function setPrecio($precio) {
        $this->_precio = $precio;
    } 
    public function getPrecio() {
       return $this->_precio;
    } 
}

?>