<?php

require_once('model/RegisterUser.php');

class controllerRegister {

  private $registerUser;

  public function __construct() {
    $this->registerUser = new RegisterUser() ;
  }

  public function addUser($name, $firstname, $email, $password) {
    $registerData = $this->register->register($name, $firstname, $email, $password);
    if ($registerData === false) {
        throw new Exception('Impossible d\'ajouter l inscription !');
    }
    else {
        header('Location: index.php');
    }
  }
}
