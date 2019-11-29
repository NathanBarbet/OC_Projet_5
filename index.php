<?php
require('model.php');

if (isset($_GET['ID']) && $_GET['ID'] > 0) {
    $post = getPost($_GET['ID']);
    require('indexView.php');
}
else {
    echo 'Erreur : aucun identifiant de billet envoye';
}
