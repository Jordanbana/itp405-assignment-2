<?php

//My namespace
namespace Database\Query;

require './Database.php';

class DvdQuery extends \Database{
  private $titleOfDVD;
  private $ordered = 0;

  //Shoudl take a string and maybe set it to a variable
  public function titleContains(String $title){
    $this->titleOfDVD = $title;
    echo $this->titleOfDVD;
  }
  //Order function maybe change a boolean or something
  public function orderByTitle(){
    $this->ordered = 1;
  }
  //Should execute the query
  public function find(){
    if ($this->ordered == 1){
      $sql = "
        SELECT title,award
        FROM dvds
        WHERE title like ?
        ORDER BY title ASC
        LIMIT 25
      ";
    }
    else{
      $sql = "
        SELECT title,award
        FROM dvds
        WHERE title like ?
        LIMIT 25
      ";
    }
    $statement = self::$pdo->prepare($sql);
    $like = '%' . $this->titleOfDVD . '%';
    $statement->bindParam(1, $like);
    $statement->execute();
    //Added the \ to remove it from the namespace (just like on top with DB)
    $dvds = $statement->fetchAll(\PDO::FETCH_OBJ);
    var_dump($dvds);
  }

}

?>
