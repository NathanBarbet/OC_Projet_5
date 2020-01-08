<?php

abstract class Db
{
    private $db;

    protected function executerRequete($sql, $params = null) {
    if ($params == null) {
      $resultat = $this->dbConnect()->query($sql);    // exécution directe
    }
    else {
      $resultat = $this->dbConnect()->prepare($sql);  // requête préparée
      $resultat->execute($params);
    }
    return $resultat;
  }

  // Renvoie un objet de connexion à la BD en initialisant la connexion au besoin
  private function dbConnect() {
    if ($this->db == null) {
      // Création de la connexion
      $this->db = new PDO('mysql:host=localhost;dbname=oc_projet_5;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
    return $this->db;
  }

}
