<?php

// Clase ConcreteBuilder (implementación de la interfaz Builder - construye y reúne las partes necesarias para construir los productos).

class Carbonara extends PrepararPizza {

    public function nombrePizza() {
        $this->pizza->setNombre('Carbonara');
    }

    public function amasar($masa) {
        $this->pizza->setMasa('Fina');
    }

    public function prepararBorde($borde) {
        $this->pizza->setBorde("Sin queso");
    }    

    public function añadirIngredientes($ingredientes) {
        $this->pizza->setIngredientes(['nata', 'mozzarella', 'bacon', 'champiñones', 'cebolla']);
    }

    public function precioPizza() {
        $this->pizza->setPrecio('13,95');
    }
}

?>