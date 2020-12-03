<?php

class BBQ extends PrepararPizza {

    public function amasar($masa) {
        $this->pizza->setMasa('Fina');
    }

    public function prepararBorde($borde) {
        $this->pizza->setBorde('Sin queso');
    }    

    public function añadirIngredientes($ingredientes) {
        $this->pizza->setIngredientes(['salsa bbq', 'pollo', 'havarty', 'bacon', 'maiz']);
    }

    public function añadirArray() {
        $this->Apizzas['BBQ'] = $this->pizza;
    }
}

?>