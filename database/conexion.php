<?php 

//Usamos Singleton para conectarnos a la base de datos
class ConnectDb {
   //La instancia para el Singleton
   private static $instance = null;
   private $conn;
   
   private $host = 'localhost';
   private $user = 'user1';
   private $pass = 'Aa123456_';
   private $name = 'pizzeria';
    
   //La conexion a la BD se crea en el constructor
   private function __construct()
   {
     $this->conn = new PDO("mysql:host={$this->host};
     dbname={$this->name}", $this->user,$this->pass,
     array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
   }

   //Llamamos a la instancia
   public static function getInstance()
   {
     if(!self::$instance)
     {
       self::$instance = new ConnectDb();
     }
    
     return self::$instance;
   }
   
   //Llamamos a la conexiona la DB
   public function getConnection()
   {
     return $this->conn;
   }
 }

?>