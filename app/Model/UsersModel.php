<?php

namespace Model;

use \W\Model\ConnectionModel;
use \W\Model\UsersModel as WUsersModel;

class UsersModel extends  WUsersModel
 {

  //  public function __construct(){
  //      $app = getApp();
  //      // Définit la table en fonction de la config
  //      $this->setTable($app->getConfig('security_user_table'));
  //
  //      $this->dbh = ConnectionModel::getDbh();
  //    }
  // // ici dans le Blog nous avons fait un __construct qui utilise les méthodes setTable et getDbh

  public function findFiveLastEnseignants() {

    $sql = "SELECT u.pseudo, u.region_id, u.created_at, u.role, r.name, r.id
            FROM tilt_user AS u
            LEFT JOIN tilt_regions AS r
            ON u.region_id = r.id
            WHERE u.role = 'enseignant'
            ORDER BY u.created_at DESC
            LIMIT 5";

    $sth = $this->dbh->prepare($sql);
    $sth->execute();

    $result = $sth->fetchAll();

    return $result;

  } // ferme la méthode findFiveLastEnseignants

  public function findFiveLastApprenants() {

    $sql = "SELECT u.pseudo, u.region_id, u.created_at, u.role, r.name, r.id
            FROM tilt_user AS u
            LEFT JOIN tilt_regions AS r
            ON u.region_id = r.id
            WHERE u.role = 'apprenant'
            ORDER BY u.created_at DESC
            LIMIT 5";

    $sth = $this->dbh->prepare($sql);
    $sth->execute();

    $result = $sth->fetchAll();

    return $result;

  } // ferme la méthode findFiveLastApprenants

  public function findApprenantsInRegion($regionslug) {

    // on stocke dans une variable $regionslug le slug de la région récupérée
    // quand l'utilisateur a cliqué sur la carte
    // NE FONCTIONNE PAS !!

    $sql = "SELECT r.id, r.slug, i.regions_id, i.user_id, u.id, u.pseudo, u.role, c.id, c.name
            FROM tilt_regions AS r
            INNER JOIN tilt_interm AS i
            ON r.id = i.regions_id
            INNER JOIN tilt_user AS u
            ON i.user_id = u.id
            INNER JOIN tilt_competences AS c
            ON c.id = i.competences_id
            WHERE u.role = 'apprenant' AND r.slug = $regionslug ";

    $sth = $this->dbh->prepare($sql);
    $sth->execute();

    $result = $sth->fetchAll();

    return $result;

  }

} // ferme la classe UserModel
