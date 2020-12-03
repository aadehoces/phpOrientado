<?php

class AlGusto extends PrepararPizza {

    public function amasar($masa) {
        $this->pizza->setMasa($masa);
    }

    public function prepararBorde($borde) {
        $this->pizza->setBorde($borde);
    }    

    public function añadirIngredientes($ingredientes) {
        $this->pizza->setIngredientes($ingredientes);
    }

    public function añadirArray() {
        $this->Apizzas['Al_gusto'] = $this->pizza;
    }
}

?>