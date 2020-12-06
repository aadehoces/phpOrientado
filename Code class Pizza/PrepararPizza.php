<?php

//Clase Builder (define una interfaz abstracta para crear productos).

abstract class PrepararPizza {

    protected $pizza;    

    public function crearPizza() {
        $this->pizza = new Pizza();
    }

    public function getPizza() {
        return $this->pizza;
    }

    abstract public function nombrePizza($nombre);

    abstract public function amasar($masa);

    abstract public function prepararBorde($borde);

    abstract public function añadirIngredientes($ingredientes);

}

?>