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

    $sql = "SELECT name, id
            FROM tilt_regions";

    $sth = $this->dbh->prepare($sql);
    $sth->execute();

    $result = $sth->fetchAll();

    return $result;

  } //ferme la méthode findAllRegions

  //méthode pour trouver le nom de la région à partir de son region_id dans la table users
  public function findRegionName($regionId) {

    $sql = "SELECT r.name
            FROM tilt_regions AS r
            LEFT JOIN tilt_user AS u
            ON u.region_id = r.id
            WHERE u.region_id = :regionId";

    $sth = $this->dbh->prepare($sql);
    $sth->bindValue(':regionId', $regionId);
    $sth->execute();

    $result = $sth->fetch();

    return $result;

  }

} //ferme la class RegionsModel
