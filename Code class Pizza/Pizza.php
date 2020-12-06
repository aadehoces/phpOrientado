<?php

//Clase Producto (El objeto bajo construcción - Métodos Propios).

class Pizza {

    private $nombre;
    private $masa;
    private $borde;
    private $ingredientes = [];  

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }
    
    public function setMasa($masa) {
        $this->masa = $masa;
    }

    public function setBorde($borde) {
        $this->borde = $borde;
    }

    public function setIngredientes($ingredientes) {
        $this->ingredientes = $ingredientes;
    }    
    
}

?>