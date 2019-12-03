<?php
require('../model/model.php');

if (isset($_GET['ID']) && $_GET['ID'] > 0) {
    $post = getPost($_GET['ID']);
    $comments = getComments($_GET['ID']);
    require('../view/postView.php');
}
else {
    echo 'Erreur : aucun identifiant de billet envoyé';
}
