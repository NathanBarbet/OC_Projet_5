<?php

require_once 'controller/controllerHome.php';
require_once 'controller/controllerPost.php';
require_once 'controller/controllerUser.php';
require_once 'controller/controllerPanel.php';

class Routeur {

  private $ctrlHome;
  private $ctrlPost;
  private $ctrlUser;
  private $ctrlPanel;

  public function __construct() {
    $this->ctrlHome = new controllerHome();
    $this->ctrlPost = new controllerPost();
    $this->ctrlUser = new controllerUser();
    $this->ctrlPanel = new controllerPanel();
  }

  // Traite une requête entrante
  public function routerRequete() {
    try {
        if (isset($_GET['action'])) {
            if (htmlspecialchars($_GET['action']) == 'listPosts') {
                $this->ctrlHome->listPosts();
            }
            elseif (htmlspecialchars($_GET['action']) == 'listAllPosts') {
                $this->ctrlPost->listAllPosts();
            }
            elseif (htmlspecialchars($_GET['action']) == 'post') {
                if (isset($_GET['ID']) && $_GET['ID'] > 0) {
                    $this->ctrlPost->getPost();
                }
                else {
                    throw new Exception('Aucun identifiant de billet envoyé');
                }
            }
            elseif (htmlspecialchars($_GET['action']) == 'addComment') {
                if (isset($_GET['ID']) && htmlspecialchars($_GET['ID']) > 0) {
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
            elseif (htmlspecialchars($_GET['action']) == 'register') {
                require 'view/frontend/register.php';
            }
            elseif (htmlspecialchars($_GET['action']) == 'register_confirm') {
              if (isset($_POST['Name']) AND isset($_POST['Firstname']) AND isset($_POST['Email']) AND isset($_POST['Password'])) {
                $this->ctrlUser->addUser();
              }
              else {
                throw new Exception('Tous les champs ne sont pas remplis');
              }
            }
            elseif (htmlspecialchars($_GET['action']) == 'login') {
                require 'view/frontend/login.php';
            }
            elseif (htmlspecialchars($_GET['action']) == 'login_confirm') {
              if (isset($_POST['Email']) AND isset($_POST['Password'])) {
                $this->ctrlUser->logUser();
              }
              else {
                throw new Exception('Tous les champs ne sont pas remplis');
              }
            }
            elseif (htmlspecialchars($_GET['action']) == 'logout') {
                require 'view/frontend/logout.php';
            }
            elseif (htmlspecialchars($_GET['action']) == 'panel') {
                $this->ctrlPanel->listPostsPanel();
            }
            elseif (htmlspecialchars($_GET['action']) == 'delpost') {
                if (isset($_GET['ID']) && htmlspecialchars($_GET['ID']) > 0 AND isset($_SESSION['Admin']) && $_SESSION['Admin'] == 1) {
                    $this->ctrlPanel->delPostPanel();
                }
                else {
                    throw new Exception('Aucun identifiant de billet envoyé');
                }
            }
            elseif (htmlspecialchars($_GET['action']) == 'addpostpanel') {
                require 'view/backend/panel_addpost.php';
            }
            elseif (htmlspecialchars($_GET['action']) == 'addpost_confirm')
            {
                if (isset($_POST['Title']) AND isset($_POST['Post_lead']) AND isset($_POST['Content']) AND isset($_POST['Img']) AND isset($_SESSION['Admin']) && $_SESSION['Admin'] == 1)
                {
                    $this->ctrlPanel->addPostPanel();
                }
                else
                {
                    throw new Exception('Aucun identifiant de billet envoyé');
                }
            }
            elseif (htmlspecialchars($_GET['action']) == 'editpostpanel') {
                $this->ctrlPanel->getPostPanel();
            }
            elseif (htmlspecialchars($_GET['action']) == 'editpostconfirm')
            {
                if (isset($_POST['Title']) AND isset($_POST['Post_lead']) AND isset($_POST['Content']) AND isset($_POST['Img']) AND isset($_SESSION['Admin']) && $_SESSION['Admin'] == 1)
                {
                    $this->ctrlPanel->editPostPanel();
                }
                else
                {
                    throw new Exception('Aucun identifiant de billet envoyé');
                }
            }
            elseif (htmlspecialchars($_GET['action']) == 'publishpost') {
                if (isset($_GET['ID']) && $_GET['ID'] > 0 AND isset($_SESSION['Admin']) && $_SESSION['Admin'] == 1) {
                    $this->ctrlPanel->publishPost();
                }
                else {
                    throw new Exception('Aucun identifiant de billet envoyé');
                }
            }
            elseif (htmlspecialchars($_GET['action']) == 'pausepost') {
                if (isset($_GET['ID']) && $_GET['ID'] > 0 AND isset($_SESSION['Admin']) && $_SESSION['Admin'] == 1) {
                    $this->ctrlPanel->pausePost();
                }
                else {
                    throw new Exception('Aucun identifiant de billet envoyé');
                }
            }
            elseif (htmlspecialchars($_GET['action']) == 'panel_users') {
                $this->ctrlPanel->listUsersPanel();
            }
            elseif (htmlspecialchars($_GET['action']) == 'deluser') {
                if (isset($_GET['ID']) && $_GET['ID'] > 0 AND isset($_SESSION['Admin']) && $_SESSION['Admin'] == 1) {
                    $this->ctrlPanel->delUserPanel();
                }
                else {
                    throw new Exception('Aucun identifiant de billet envoyé');
                }
            }
            elseif (htmlspecialchars($_GET['action']) == 'panel_comments') {
                $this->ctrlPanel->listCommentsPanel();
            }
            elseif (htmlspecialchars($_GET['action']) == 'delcomment') {
                if (isset($_GET['ID']) && $_GET['ID'] > 0 AND isset($_SESSION['Admin']) && $_SESSION['Admin'] == 1) {
                    $this->ctrlPanel->delCommentPanel();
                }
                else {
                    throw new Exception('Aucun identifiant de billet envoyé');
                }
            }
            elseif (htmlspecialchars($_GET['action']) == 'publishcomment') {
                if (isset($_GET['ID']) && $_GET['ID'] > 0 AND isset($_SESSION['Admin']) && $_SESSION['Admin'] == 1) {
                    $this->ctrlPanel->publishComment();
                }
                else {
                    throw new Exception('Aucun identifiant de billet envoyé');
                }
            }
            elseif (htmlspecialchars($_GET['action']) == 'pausecomment') {
                if (isset($_GET['ID']) && $_GET['ID'] > 0 AND isset($_SESSION['Admin']) && $_SESSION['Admin'] == 1) {
                    $this->ctrlPanel->pauseComment();
                }
                else {
                    throw new Exception('Aucun identifiant de billet envoyé');
                }
            }
            elseif (htmlspecialchars($_GET['action']) == 'sendcontact') {
                require 'view/frontend/sendcontact.php';
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
