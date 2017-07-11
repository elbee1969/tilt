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

    $sql = "SELECT r.id, r.name, i.user_id, i.competences_id, c.name, u.pseudo, u.role
            FROM tilt_regions AS r
            LEFT JOIN tilt_interm AS i
            ON r.id = i.regions_id
            LEFT JOIN tilt_competences AS c
            ON i.competences_id = c.id
            LEFT JOIN tilt_user AS u
            ON i.user_id = u.id
            WHERE r.slug = :regionslug AND u.role = 'apprenant'";

    $sth = $this->dbh->prepare($sql);
    $sth->bindValue(':regionslug', $regionslug);
    $sth->execute();

    $result = $sth->fetchAll();

    return $result;

  } // ferme la méthode findApprenantsInRegion

  public function findEnseignantsinRegion($regionslug) {

    // idem que findApprenantsInRegion mais pour les Enseignants

    $sql = "SELECT r.id, r.name, i.user_id, i.competences_id, c.name, u.pseudo, u.role
            FROM tilt_regions AS r
            LEFT JOIN tilt_interm AS i
            ON r.id = i.regions_id
            LEFT JOIN tilt_competences AS c
            ON i.competences_id = c.id
            LEFT JOIN tilt_user AS u
            ON i.user_id = u.id
            WHERE r.slug = :regionslug AND u.role = 'enseignant'";

    $sth = $this->dbh->prepare($sql);
    $sth->bindValue(':regionslug', $regionslug);
    $sth->execute();

    $result = $sth->fetchAll();

    return $result;

  } // ferme la méthode findEnseignantsinRegion

} // ferme la classe UserModel
