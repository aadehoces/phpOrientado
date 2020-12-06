<?php
 
class Session {
 
    function __construct($id=null) {
        session_id($id);
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
    
    public function get_id(){
        return session_id();
    }
    function destroySession() {
        session_destroy();
    }
}



?>