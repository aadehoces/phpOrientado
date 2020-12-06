<?php

//Clase Producto (El objeto bajo construcción - Métodos Propios).

class Pizza {

    public $_IDpizza;
    private $_nombre;
    private $_masa;
    private $_borde;
    private $_ingredientes = [];
    static $_contador=0;

    public function __construct() {
        self::$_contador += 1;  
        $this->_IDpizza = self::$_contador;       
    }

    public function setNombre($nombre) {        
        $this->_nombre = $nombre;
    }
    
    public function setMasa($masa) {
        $this->_masa = $masa;
    }

    public function setBorde($borde) {
        $this->_borde = $borde;
    }

    public function setIngredientes($ingredientes) {
        $this->_ingredientes = $ingredientes;
    }    

}

?>