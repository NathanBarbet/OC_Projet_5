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
}
?>
