<?php
  Class Database{

  public function connectToDb(){
      if($mysqli = new PDO("mysql:host=localhost;dbname=PORTFOLIO", "root", "root")){
          return $mysqli;
      }
    }

}
?>
