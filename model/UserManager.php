<?php
require_once("model/db.php");

class UserManager extends db
{
    public function addUser()
    {
        $sql = 'INSERT INTO users(Name, Firstname, Email, Password, Registration_date, Admin) VALUES(?, ?, ?, ?, NOW(), 0)';
        $requete = $this->executerRequete($sql, array($this->name, $this->firstname, $this->email, $this->password));
        return $requete;
    }

    public function logUser()
    {
      $sql = 'SELECT ID, Name, Firstname, Email, Password, Admin FROM users WHERE Email = :Email';
      $requete = $this->executerRequete($sql, array('Email' => $this->email));
      $result = $requete->fetch();

      $passwordCorrect = password_verify($this->password, $result['Password']);

      if (!$result)
      {
        echo 'Mauvais identifiant ou mot de passe !';
        require('view/frontend/login.php');
      }
      else
      {
        if ($passwordCorrect)
        {
          session_start();
          $_SESSION['ID'] = $result['ID'];
          $_SESSION['Email'] = $result['Email'];
          $_SESSION['Name'] = $result['Name'];
          $_SESSION['Firstname'] = $result['Firstname'];
          $_SESSION['Admin'] = $result['Admin'];
          echo 'Vous êtes connecté !';
        }
        else
        {
          echo 'Mauvais identifiant ou mot de passe !';
          require('view/frontend/login.php');
        }
      }
    }
}
?>
