<?php
 
class Session {
 
    function __construct() {
        session_start();
    }
 
    function setAttribute($name, $value) {

        if (is_string($name)) {
            $_SESSION[$name] = $value;
        }
    }
 
    function getAttribute($name) {

        if (isset($_SESSION[$name])) {   
            return $_SESSION[$name];
        }
        return null;
    }
 
    function deleteAttribute($name) {

        if (isset($_SESSION[$name])) {
            unset($_SESSION[$name]);
        }
    }
 
    function destroySession() {
        session_destroy();
    }
}

// Prueba 

$session = new Session();
 
$session->setAttribute("usuario", "fernando");

$session->deleteAttribute("usuario");

echo $session->getAttribute("usuario") . "<br/>"; 

$session->destroySession();

?>