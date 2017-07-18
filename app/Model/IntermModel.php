<?php

namespace Model;

use \W\Model\Model;
use \W\Model\ConnectionModel;
use \TutoratModel;
use \W\Model\UsersModel as WUsersModel;
use \W\Security\AuthentificationModel;

class IntermModel extends \W\Model\Model {

  // ici dans le Blog nous avons fait un __construct qui utilise les méthodes setTable et getDbh
  public function __construct() {
    $this->setTable('tilt_interm');
    $this->dbh = ConnectionModel::getDbh();
  }

//methode pour trouver si l' utilisateur déjà inscrit à une matère dans la table tilt_interm
  public function isInscript($id)
{
  $sql ="SELECT * FROM tilt_interm WHERE user_id = $id";
          $sth = $this->dbh->prepare($sql);
          $sth->execute();
          $result = $sth->fetchAll();
          return $result;
}

public function countCours()
{
$sql ="SELECT id FROM tilt_tutorat";
        $sth = $this->dbh->prepare($sql);
        $sth->execute();
        $result = $sth->fetchAll();
        return count($result);
}


  //methode pour inserer dans la table interm les utilisateurs par région et par compétences
  public function insertInto($user_id,$region_id,$competences_id){

        $sql = "INSERT INTO tilt_interm ( user_id, regions_id, competences_id )
								VALUES (:user_id, :region_id, :competences_id)";
								$sth = $this->dbh->prepare($sql);
								$sth->bindValue(':user_id', $user_id);
								$sth->bindValue(':region_id', $region_id);
								$sth->bindValue(':competences_id',$competences_id);
								$sth->execute();
                return true;
	}//fin methode insertInto

  //methode pour récupérer tous les utilisateurs par région et pas compétences
  public function idRegCompet(){
    $sql ="SELECT * FROM tilt_interm WHERE 1";
        $sth = $this->dbh->prepare($sql);
        $sth->execute();
        $result = $sth->fetchAll();
        return $result;
  }//fin methode idRegCompet

} //ferme la classe IntermModel
