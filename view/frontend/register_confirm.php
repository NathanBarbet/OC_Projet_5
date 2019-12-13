<html>
    <head>
        <meta charset='utf-8' />
        <title>Inscription confirmée</title>
    </head>

<body>

<?php

include_once('model/RegisterUser.php');

if(isset($_POST['Name']) AND isset($_POST['Firstname']) AND isset($_POST['Email']) AND isset($_POST['Password']))
{
    $name_user = $_POST['Name'];
    $firstname_user = $_POST['Firstname'];
    $email_user = $_POST['Email'];
    $password_user = $_POST['Password'];

    $RegisterUser = new RegisterUser;
    $RegisterUser->setName($name_user);
    $RegisterUser->setFirstname($firstname_user);
    $RegisterUser->setEmail($email_user);
    $RegisterUser->setPassword($password_user);

    $RegisterUser->addUser();

    echo 'Inscription confirmée';
}
else
{
    echo 'Remplissez tous les champs';
}
?>

<br /> <br />
<a href='index.php'>Retour à l'accueil</a>

</body>
</html>
