<?php

namespace Model;

use \W\Model\Model;
use \W\Model\ConnectionModel;

class RegionsModel extends Model {

  // ici dans le Blog nous avons fait un __construct qui utilise ls méthodes setTbale et getDbh
  public function __construct() {
    $this->setTable('tilt_regions');
    $this->dbh = ConnectionModel::getDbh();
  } //ferme le constructeur

  // méthode pour la liste déroulante de la page Inscription
  public function findAllRegions() {

    $sql = "SELECT name
            FROM tilt_regions";

    $sth = $this->dbh->prepare($sql);
    $sth->execute();

    $result = $sth->fetchAll();

    return $result;

  } //ferme la méthode findAllRegions

} //ferme la class RegionsModel
