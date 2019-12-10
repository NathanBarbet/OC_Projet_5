<?php

require_once 'controller/controllerAccueil.php';
require_once 'controller/controllerPost.php';
require_once 'model/View.php';

class Routeur {

  private $ctrlAccueil;
  private $ctrlPost;

  public function __construct() {
    $this->ctrlAccueil = new ControllerAccueil();
    $this->ctrlPost = new ControllerPost();
  }

  // Traite une requête entrante
  public function routerRequete() {
    try {
      if (isset($_GET['action'])) {
        if ($_GET['action'] == 'post') {
          if (isset($_GET['ID'])) {
            $postId = intval($_GET['ID']);
            if ($postId != 0) {
              $this->ctrlPost->post($postId);
            }
            else
              throw new Exception("Identifiant de billet non valide");
          }
          else
            throw new Exception("Identifiant de billet non défini");
        }
        else
          throw new Exception("Action non valide");
      }
      else {  // aucune action définie : affichage de l'accueil
        $this->ctrlAccueil->accueil();
      }
    }
    catch (Exception $e) {
      $this->erreur($e->getMessage());
    }
  }

  // Affiche une erreur
  private function erreur($msgErreur) {
    $view = new View("Erreur");
    $view->generer(array('msgErreur' => $msgErreur));
  }
}
