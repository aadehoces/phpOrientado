<?php

class Cookie {

    private $_name;
    private $_value;
    //Asignar aqui tb si siempre va aser el mismo?
    private $_time;
    private $_domain = null;
    private $_path = false;
    private $_secure = false;

    public function __construct($name, $value) {
        $this->_name = $name;
        $this->_value = $value;
        // time...etc, en caso de no necesitar setTime.
        // $this->_time = $time;
    }

    public function setTime($time) {
        
        $date = new DateTime();
        // Le suma el valor especificado a la fecha de hoy.
        $date->modify($time);
        // setTimestamp() - Establece la fecha y la hora basándose en una marca temporal.
        $this->_time = $date->getTimestamp();
    }

    public function getTime() {
        return $this->_time;
    }

    public function create() {
        return setcookie($this->_name, $this->_value, $this->getTime(), $this->_path, $this->_domain, $this->_secure, true);
    }

    public function getCoookie(){
        return $_COOKIE[$this->_name];
    }

    public function delete(){
        return setcookie($this->_name, '', time() - 3600);
    }
}

//Prueba

$cookie = new Cookie("prueba", "Funciona?");

$cookie->setTime("+1 hour");

$cookie->create();

print_r($cookie->getCoookie());

//$cookie->delete();

?>
