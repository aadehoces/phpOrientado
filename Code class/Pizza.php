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

    public function setIngredientes($ingredientes) {
        $this->ingredientes = $ingredientes;
    }    

}

?>