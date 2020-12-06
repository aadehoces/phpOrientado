<?php

class Cookies {

    

    public function __construct() {}

    public function create_cookie($name,$value) {
        setcookie($name,$value,"","/");
    }

    public function getCoookie(){
        return $_COOKIE[$this->_name];
    }

    public function delete_cookie($name){
        unset($_COOKIE[$name]);
    }
}
?>
