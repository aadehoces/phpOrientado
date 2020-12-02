<?php

class AlGusto extends PrepararPizza {

    public function amasar() {
        $this->pizza->setMasa('');
    }

    public function prepararBorde() {
        $this->pizza->setBorde('');
    }    

    public function añadirIngredientes() {
        $this->pizza->setIngredientes(['']);
    }

    public function añadirArray() {
        $this->Apizzas['Al_gusto'] = $this->pizza;
    }
}

?>