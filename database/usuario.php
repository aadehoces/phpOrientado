<?php
 class Usuario extends ActiveRecord\Model {

  public static $table_name = 'usuario';
  public static $primary_key = 'id';

  public function before_create(){}
  public function before_update(){}

}


?>