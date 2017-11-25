<?php
 include_once "" . ROOT_PATH . PROJECT_PATH . "/model/php/User.php";

Class Controller{

  private $user;

  public function __construct(){
    $this->setUserController();
  }

  public function setUserController(){
      $this->user = new User("lfarinha","5366");
      $this->user->setUser();
  }

  public function returnUserController(){
    return $this->user->getUser();
  }

}

 ?>
