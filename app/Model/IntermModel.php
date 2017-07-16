<?php

namespace Model;

use \W\Model\Model;
use \W\Model\ConnectionModel;
use \W\Model\UsersModel as WUsersModel;
use \W\Security\AuthentificationModel;

class IntermModel extends \W\Model\Model {

  // ici dans le Blog nous avons fait un __construct qui utilise les méthodes setTable et getDbh
  public function __construct() {
    $this->setTable('tilt_interm');
    $this->dbh = ConnectionModel::getDbh();
  }

  public function insertInto($user_id,$region_id,$competences_id){

				$sql = "INSERT INTO tilt_interm ( user_id, regions_id, competences_id )
								VALUES (:user_id, :region_id, :competence_id)";
								$sth = $this->dbh->prepare($sql);
								$sth->bindValue(':user_id', $user_id);
								$sth->bindValue(':region_id', $region_id);
								$sth->bindValue(':competence_id',$competences_id);
								$sth->execute();

	}


} //ferme la classe IntermModel
