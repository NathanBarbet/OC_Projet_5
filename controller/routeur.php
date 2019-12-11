<?php

require_once 'controller/controllerHome.php';
require_once 'controller/controllerPost.php';

class Routeur {

  private $ctrlHome;
  private $ctrlPost;

  public function __construct() {
    $this->ctrlHome = new controllerHome();
    $this->ctrlPost = new controllerPost();
  }

  // Traite une requête entrante
  public function routerRequete() {
    try {
        if (isset($_GET['action'])) {
            if ($_GET['action'] == 'listPosts') {
                $this->ctrlHome->listPosts();
            }
            elseif ($_GET['action'] == 'post') {
                if (isset($_GET['ID']) && $_GET['ID'] > 0) {
                    $this->ctrlPost->post($_GET['ID']);
                }
                else {
                    throw new Exception('Aucun identifiant de billet envoyé');
                }
            }
            elseif ($_GET['action'] == 'addComment') {
                if (isset($_GET['ID']) && $_GET['ID'] > 0) {
                    if (!empty($_POST['author']) && !empty($_POST['comment'])) {
                        $this->ctrlPost->addComment($_GET['ID'], $_POST['author'], $_POST['comment']);
                    }
                    else {
                        throw new Exception('Tous les champs ne sont pas remplis !');
                    }
                }
                else {
                    throw new Exception('Aucun identifiant de billet envoyé');
                }
            }
          }
          else {
              $this->ctrlHome->listPosts();
          }
      }
          catch(Exception $e) {
              echo 'Erreur : ' . $e->getMessage();
          }
  }
}
