<?php

class Carbonara extends PrepararPizza {

    public function amasar() {
        $this->pizza->setMasa('Fina');
    }

    public function prepararBorde() {
        $this->pizza->setBorde("Sin queso");
    }    

    public function añadirIngredientes() {
        $this->pizza->setIngredientes(['nata', 'mozzarella', 'bacon', 'champiñones', 'cebolla']);
    }

    public function añadirArray() {
        $this->Apizzas['Carbonara'] = $this->pizza;
    }
}

?>