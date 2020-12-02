<?php

abstract class PrepararPizza {
    protected $pizza;    
    protected $Apizzas=array();
    protected $pizzaID;
    static $contador=0;

    public function crearPizza() {
        $this->pizza = new Pizza();
        self::$contador += 1; 
        $this->pizzaID = self::$contador; 
    }    

    public function getPizza() {
        return $this->pizza;
    }

    abstract public function amasar();

    abstract public function prepararBorde();

    abstract public function añadirIngredientes();

    abstract public function añadirArray();

    public function getPizzas() {
        return $this->Apizzas;
    } 
   
}

?>