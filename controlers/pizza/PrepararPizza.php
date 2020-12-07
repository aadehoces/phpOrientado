<?php

// Clase Builder (define una interfaz abstracta para crear productos).
// Se utiliza abstracta en vez de interface para poder definir aqui los metodos crearPizza y getPizza, en vez 

abstract class PrepararPizza {

    protected $pizza;  

    public function crearPizza($id) {
        $this->pizza = new Pizza($id);
    }

    public function getPizza() {
        return $this->pizza;
    }

    abstract public function nombrePizza();

    abstract public function amasar($masa);

    abstract public function prepararBorde($borde);

    abstract public function añadirIngredientes($ingredientes);

    abstract public function precioPizza();

}

?>