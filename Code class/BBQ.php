<?php

class BBQ extends PrepararPizza {

    public function amasar() {
        $this->pizza->setMasa('Fina');
    }

    public function prepararBorde() {
        $this->pizza->setBorde('Sin queso');
    }    

    public function añadirIngredientes() {
        $this->pizza->setIngredientes(['salsa bbq', 'pollo', 'havarty', 'bacon', 'maiz']);
    }

    public function añadirArray() {
        $this->Apizzas['BBQ'] = $this->pizza;
    }
}

?>