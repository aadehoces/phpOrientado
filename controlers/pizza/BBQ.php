<?php

// Clase ConcreteBuilder (implementación de la interfaz Builder - construye y reúne las partes necesarias para construir los productos).

class BBQ extends PrepararPizza {

    public function nombrePizza() {
        $this->pizza->setNombre('BBQ');
    }

    public function amasar($masa) {
        $this->pizza->setMasa('Fina');
    }

    public function prepararBorde($borde) {
        $this->pizza->setBorde('Sin queso');
    }    

    public function añadirIngredientes($ingredientes) {
        $this->pizza->setIngredientes(['salsa bbq', 'pollo', 'havarty', 'bacon', 'maiz']);
    }
  
}

?>