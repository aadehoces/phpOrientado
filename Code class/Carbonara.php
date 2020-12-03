<?php

class Carbonara extends PrepararPizza {

    public function amasar($masa) {
        $this->pizza->setMasa('Fina');
    }

    public function prepararBorde($borde) {
        $this->pizza->setBorde("Sin queso");
    }    

    public function añadirIngredientes($ingredientes) {
        $this->pizza->setIngredientes(['nata', 'mozzarella', 'bacon', 'champiñones', 'cebolla']);
    }

    public function añadirArray() {
        $this->Apizzas['Carbonara'] = $this->pizza;
    }
}

?>