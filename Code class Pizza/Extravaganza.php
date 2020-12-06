<?php

// Clase ConcreteBuilder (implementación de la interfaz Builder - construye y reúne las partes necesarias para construir los productos).

class Extravaganza extends PrepararPizza {

    public function nombrePizza($nombre) {
        $this->pizza->setNombre('Extravaganza');
    }

    public function amasar($masa) {
        $this->pizza->setMasa('Gruesa');
    }

    public function prepararBorde($borde) {
        $this->pizza->setBorde('Con queso');
    }    

    public function añadirIngredientes($ingredientes) {
        $this->pizza->setIngredientes(['Salsa tomate', 'mozzarella', 'vacuno', 'bacon', 'peperoni', 'pimiento verde', 'champiñon', 'aceitunas']);
    }

}

?>