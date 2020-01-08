<?php
require_once("model/UserManager.php");

class User extends UserManager
{
    protected $name;
    protected $firstname;
    protected $email;
    protected $password;
    protected $date_register;
    protected $user_ID;

    public function getName()
    {
        return htmlspecialchars($this->name);
    }

    public function getFirstname()
    {
        return htmlspecialchars($this->firstname);
    }

    public function getEmail()
    {
        return htmlspecialchars($this->email);
    }

    public function getPassword()
    {
        return htmlspecialchars($this->password);
    }

    public function getDateRegister()
    {
        return htmlspecialchars($this->date_register);
    }

    public function getUserID()
    {
        return htmlspecialchars($this->user_ID);
    }

    public function setName($name_user)
    {
        if(!empty($name_user) && preg_match('#^[a-zA-Zéèç-]+$#', $name_user))
        {
            $this->name = $name_user;
        }
    }

    public function setFirstname($firstname_user)
    {
        if(!empty($firstname_user) && preg_match('#^[a-zA-Zéèç-]+$#', $firstname_user))
        {
            $this->firstname = $firstname_user;
        }
    }

    public function setEmail($email_user)
    {
        if(!empty($email_user) && preg_match('#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#', $email_user))
        {
            $this->email = $email_user;
        }
    }

    public function setPassword($password_user)
    {
        if(!empty($password_user) && preg_match('#^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$#', $password_user))
        {
            $hashed_password = password_hash($password_user, PASSWORD_DEFAULT);
            $this->password = $hashed_password;
        }
    }

    public function setPasswordLogin($password_user)
    {
        if(!empty($password_user) && preg_match('#^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$#', $password_user))
        {
            $this->password = $password_user;
        }
    }
}
?>
