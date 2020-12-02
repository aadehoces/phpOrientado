<?php

class Pizza {

    private $masa;
    private $borde;
    private $ingredientes = [];  
    
    public function setMasa($masa) {
        $this->masa = $masa;
    }

    public function setBorde($borde) {
        $this->borde = $borde;
    }

    public function setIngredientes(array $ingredientes) {
        $this->ingredientes = $ingredientes;
    }    

}

?>