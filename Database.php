<?php

class Database{

  private $host = 'itp460.usc.edu';
  private $database_name = 'dvd';
  private $username = 'student';
  private $password = 'ttrojan';
  protected static $pdo; //Giving child classes access

  public function __construct(){
    //Making sure we only make one connection
    if(!self::$pdo){
      echo 'DB Connection Created ';
      //DB Connection
      $connection_string = "mysql:host=$this->host;dbname=$this->database_name";
      //DB connection is static
      self::$pdo = new PDO($connection_string, $this->username, $this->password);
    }
  }

}


?>
