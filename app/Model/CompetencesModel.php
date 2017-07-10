<?php

namespace Model;


use \W\Model\ConnectionModel;

class CompetencesModel extends \W\Model\Model {

  // ici dans le Blog nous avons fait un __construct qui utilise les méthodes setTable et getDbh
  public function __construct() {
    $this->setTable('tilt_competences');
    $this->dbh = ConnectionModel::getDbh();
  }

  // pour la page d'accueil, renvoie les compétences en fonction de la
  // catégorie de l'icône
  public function findCompetencesFromCategory($iconcategory) {

    $sql = "SELECT name
            FROM tilt_competences
            WHERE general = :cat";

            $sth = $this->dbh->prepare($sql);
            $sth->bindValue(':cat',$iconcategory);
            $sth->execute();

            $result = $sth->fetchAll();

            return $result;

  } //ferme la méthode findCompetencesFromCategory

} //ferme la classe CompetencesModel
