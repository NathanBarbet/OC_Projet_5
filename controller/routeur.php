<?php

require_once 'controller/controllerHome.php';
require_once 'controller/controllerPost.php';
require_once 'controller/controllerUser.php';

class Routeur {

  private $ctrlHome;
  private $ctrlPost;
  private $ctrlUser;

  public function __construct() {
    $this->ctrlHome = new controllerHome();
    $this->ctrlPost = new controllerPost();
    $this->ctrlUser = new controllerUser();
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
                    $this->ctrlPost->getPost();
                }
                else {
                    throw new Exception('Aucun identifiant de billet envoyé');
                }
            }
            elseif ($_GET['action'] == 'addComment') {
                if (isset($_GET['ID']) && $_GET['ID'] > 0) {
                    if (!empty($_SESSION['ID']) && !empty($_POST['comment'])) {
                        $this->ctrlPost->addComment();
                    }
                    else {
                        throw new Exception('Tous les champs ne sont pas remplis !');
                    }
                }
                else {
                    throw new Exception('Aucun identifiant de billet envoyé');
                }
            }
            elseif ($_GET['action'] == 'register') {
                require('view/frontend/register.php');
            }
            elseif ($_GET['action'] == 'register_confirm') {
              if (isset($_POST['Name']) AND isset($_POST['Firstname']) AND isset($_POST['Email']) AND isset($_POST['Password'])) {
                $this->ctrlUser->addUser();
              }
              else {
                throw new Exception('Tous les champs ne sont pas remplis');
              }
            }
            elseif ($_GET['action'] == 'login') {
                require('view/frontend/login.php');
            }
            elseif ($_GET['action'] == 'login_confirm') {
              if (isset($_POST['Email']) AND isset($_POST['Password'])) {
                $this->ctrlUser->logUser();
              }
              else {
                throw new Exception('Tous les champs ne sont pas remplis');
              }
            }
            elseif ($_GET['action'] == 'logout') {
                require('view/frontend/logout.php');
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
