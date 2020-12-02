<?php

class Extravaganza extends PrepararPizza {

    public function amasar() {
        $this->pizza->setMasa('Gruesa');
    }

    public function prepararBorde() {
        $this->pizza->setBorde('Con queso');
    }    

    public function añadirIngredientes() {
        $this->pizza->setIngredientes(['Salsa tomate', 'mozzarella', 'vacuno', 'bacon', 'peperoni', 'pimiento verde', 'champiñon', 'aceitunas']);
    }

    public function añadirArray() {
        $this->Apizzas['Extravaganza'] = $this->pizza;
    }
}

?>