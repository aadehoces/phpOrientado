<?php

class Cliente {

    private $clienteID;
    private $nombre;
    private $email;
    private $contraseña;
    private $direccion;
    private $telefono;    
    static $contador=0;

    public function __construct() {
        self::$contador += 1; 
        $this->clienteID = self::$contador; 
        $this->Aclientes[$this->clienteID] = array();
    }

    public function encarga(PrepararPizza $builder) {
        
        $builder->crearPizza();
        $builder->prepararBorde();
        $builder->amasar();
        $builder->añadirIngredientes();

        $builder->getPizza();

        $builder->añadirArray();        

        $builder->getPizzas();

        //$builder->visualizar();
        print_r($builder->getPizzas());
    }

}

?>