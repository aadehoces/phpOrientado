<?php

abstract class PrepararPizza {
    protected $pizza;    
    protected $Apizzas=array();

    public function crearPizza() {
        $this->pizza = new Pizza();
    }    

    public function getPizza() {
        return $this->pizza;
    }

    abstract public function amasar($masa);

    abstract public function prepararBorde($borde);

    abstract public function añadirIngredientes($ingredientes);

    abstract public function añadirArray();

    public function getPizzas() {
        return $this->Apizzas;
    } 
   
}

?>