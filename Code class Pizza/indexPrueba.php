<?php

require_once 'Cliente.php';
require_once 'PrepararPizza.php';
require_once 'Pizza.php';
require_once 'Carbonara.php';
require_once 'BBQ.php';
require_once 'Extravaganza.php';
require_once 'AlGusto.php';

$cliente = new Cliente();
$cliente->encarga(new BBQ());
$cliente->encarga(new Carbonara());
$cliente->encarga(new Extravaganza());
$cliente->encarga(new AlGusto(), 'fina', 'con queso', array('york', 'tomate'));

//print_r($cliente->getPizzas());

print_r($cliente);

/* 
$client2 = new Cliente();
$client2->encarga(new Carbonara());
*/

?>