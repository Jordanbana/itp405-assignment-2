<?php

//My namespace
namespace Database\Query;

require './Database.php';


class DvdQuery extends \Database{
  private $titleOfDVD;


  //Shoudl take a string and maybe set it to a variable
  public function titleContains(String $title){
    $this->titleOfDVD = $title;
    echo $this->titleOfDVD;
  }
  //Order function maybe change a boolean or something
  public function orderByTitle(){
  }
  //Should execute the query
  public function find(){
    $sql = "
      SELECT *
      FROM dvds
      LIMIT 10
    ";
    $statement = self::$pdo->prepare($sql);
    // //$statement->bindParam(1, $this->name);
    $statement->execute();
    //Added the \ to remove it from the namespace (just like on top with DB)
    $dvds = $statement->fetchAll(\PDO::FETCH_OBJ);
    var_dump($dvds);
  }

}

?>
