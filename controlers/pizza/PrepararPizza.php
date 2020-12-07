<?php

// Clase Builder (define una interfaz abstracta para crear productos).
// Se utiliza abstracta en vez de interface para poder definir aqui los metodos crearPizza y getPizza, en vez 

abstract class PrepararPizza {

    protected $pizza;  

    public function crearPizza() {
        $this->pizza = new Pizza();
    }

    public function getPizza() {
        return $this->pizza;
    }

    abstract public function nombrePizza();

    abstract public function amasar($masa);

    abstract public function prepararBorde($borde);

    abstract public function añadirIngredientes($ingredientes);

}

?>