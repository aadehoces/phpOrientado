<?php 
 require_once '../lib/activerecord/ActiveRecord.php';
 ActiveRecord\Config::initialize(function($cfg)
 {
    $cfg->set_model_directory('models');
    $cfg->set_connections(array(
    'development' => 'mysql://user1:Aa123456_@localhost/pizzeria'));
 }); 
?>