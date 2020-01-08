<?php

require_once 'model/User.php';

class controllerUser {

  private $User;

  public function __construct() {
    $this->User = new User() ;
  }

  public function addUser() {
    if (htmlspecialchars($_POST["Password"]) === htmlspecialchars($_POST["Confirm_Password"]))
    {
      $password_user = htmlspecialchars($_POST['Password']);
    }
    else
    {
      echo 'Problème lors de l"inscription : Les mots de passes ne sont pas identiques';
      require 'view/frontend/register.php';
    }

    $name_user = htmlspecialchars($_POST['Name']);
    $firstname_user = htmlspecialchars($_POST['Firstname']);
    $email_user = htmlspecialchars($_POST['Email']);

    $User = new User;
    $User->setName($name_user);
    $User->setFirstname($firstname_user);
    $User->setEmail($email_user);
    $User->setPassword($password_user);

    $User->addUser();

    require 'view/frontend/register_confirm.php';
  }

  public function logUser() {

    $email_user = htmlspecialchars($_POST['Email']);
    $password_user = htmlspecialchars($_POST['Password']);

    $User = new User;
    $User->setEmail($email_user);
    $User->setPasswordLogin($password_user);

    $User->logUser();

    header('location: home');
  }
}
