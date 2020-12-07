<?php

// Clase ConcreteBuilder (implementación de la interfaz Builder - construye y reúne las partes necesarias para construir los productos).

class AlGusto extends PrepararPizza {

    public function nombrePizza() {
        $this->pizza->setNombre('Al_gusto');
    }

    public function amasar($masa) {
        $this->pizza->setMasa($masa);
    }

    public function prepararBorde($borde) {
        $this->pizza->setBorde($borde);
    }    

    public function añadirIngredientes($ingredientes) {
        $this->pizza->setIngredientes($ingredientes);
    }
    /*
    public function añadirArray() {
        $this->Apizzas['Al_gusto'] = $this->pizza;
    }
    */
}

?>