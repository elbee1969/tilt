<?php

namespace Model;

use \W\Model\Model;
use \W\Model\ConnectionModel;

class RegionsModel extends Model {

  // ici dans le Blog nous avons fait un __construct qui utilise ls méthodes setTbale et getDbh
  public function __construct() {
    $this->setTable('tilt_regions');
    $this->dbh = ConnectionModel::getDbh();
  }
}
