<?php
 
class Session {
 
    function __construct($id=null) {
        session_id($id);
        session_start();
    }
 
    public function setAttribute($name, $value) {

        if (is_string($name)) {
            $_SESSION[$name] = serialize($value);
        }
    }
 
    public function getAttribute($name) {

        if (isset($_SESSION[$name])) {   
            return unserialize($_SESSION[$name]);
        }
        return null;
    }
 
    public function deleteAttribute($name) {

        if (isset($_SESSION[$name])) {
            unset($_SESSION[$name]);
        }
    }
    
    public function get_id(){
        return session_id();
    }
    public function destroySession() {
        session_destroy();
    }
}



?>