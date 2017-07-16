<?php

namespace Model;

use \W\Model\Model;
use \W\Model\ConnectionModel;
use \W\Model\UsersModel as WUsersModel;
class TutoratModel extends Model {



  // ici dans le Blog nous avons fait un __construct qui utilise ls méthodes setTbale et getDbh
  public function __construct() {
    $this->setTable('tilt_tutorat');
    $this->dbh = ConnectionModel::getDbh();
  } //ferme le constructeur


  public function findApprenantsInRegionById($region_id,$id) {

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
            LEFT JOIN tilt_tutorat AS t
            ON i.user_id = t.id_apprenant
            WHERE r.id = :region_id AND u.role = 'apprenant' AND t.id_apprenant = $id";

    $sth = $this->dbh->prepare($sql);
    $sth->bindValue(':region_id', $region_id);
    $sth->execute();

    $result = $sth->fetchAll();

    return $result;

  } // ferme la méthode findApprenantsInRegionById

  public function findEnseignantsinRegionById($region_id,$id) {

    // idem que findApprenantsInRegionById mais pour les Enseignants

    $sql = "SELECT r.id, r.name, i.user_id, i.competences_id, c.name, u.pseudo, u.role
            FROM tilt_regions AS r
            LEFT JOIN tilt_interm AS i
            ON r.id = i.regions_id
            LEFT JOIN tilt_competences AS c
            ON i.competences_id = c.id
            LEFT JOIN tilt_user AS u
            ON i.user_id = u.id
            LEFT JOIN tilt_tutorat AS t
            ON i.user_id = t.id_enseignant
            WHERE r.id = :regionid AND u.role = 'enseignant'AND t.id_enseignant = $id";

    $sth = $this->dbh->prepare($sql);
    $sth->bindValue(':regionid', $regionid);
    $sth->execute();

    $result = $sth->fetchAll();

    return $result;

  } // ferme la méthode findEnseignantsinRegionById


  /**
   *  trouve tous les messages d apprenant rataché à un enseignant
   */
  public function findMsgApprenantByEnseignant($id){

    $sql ="SELECT u.id, t.id_enseignant, u.pseudo, t.id_competence, c.name AS matiere, r.name as region
          FROM tilt_user AS u
          RIGHT JOIN tilt_tutorat as t
          ON u.id = t.id_apprenant
          RIGHT JOIN tilt_competences AS c
          ON t.id_competence = c.id
          RIGHT JOIN tilt_regions AS r
          ON t.id_region = r.id
          WHERE  t.id_enseignant = $id
          ";

    $sth = $this->dbh->prepare($sql);
    $sth->execute();

    $result = $sth->fetchAll();

    return $result;


  }  // ferme la méthode findApprenantByEnseignant

  /**
   *  trouve tous les messages d'enseignants rataché à un apprenant
   */
  public function findMsgEnseignantByApprenant($id){

    $sql ="SELECT u.id, t.id_apprenant, u.pseudo, t.id_competence, c.name AS matiere, r.name as region
          FROM tilt_user AS u
          RIGHT JOIN tilt_tutorat as t
          ON u.id = t.id_enseignant
          RIGHT JOIN tilt_competences AS c
          ON t.id_competence = c.id
          RIGHT JOIN tilt_regions AS r
          ON t.id_region = r.id
          WHERE  t.id_apprenant = $id
          ";

    $sth = $this->dbh->prepare($sql);
    $sth->execute();

    $result = $sth->fetchAll();

    return $result;


  }  // ferme la méthode findApprenantByEnseignant

  // méthode pour trouver tous les messages
  /**
   * [findAllMessages description]
   * @return [array] [tous les messages]
   */
  public function findAllApprenants() {

    $sql = "SELECT id_apprenant
            FROM tilt_tutorat";

    $sth = $this->dbh->prepare($sql);
    $sth->execute();

    $result = $sth->fetchAll();

    return $result;

  } //ferme la méthode findAllApprenants

  // méthode pour trouver un appre
  public function findApprenant() {

    // $sql = "SELECT m.id, m.id_enseignat, m.id_apprenant, u.id, u.pseudo
    //         FROM tilt_messages AS m
    //         LEFT JOIN tilt_users AS u
    //         ON m.id = u.id_enseignant
    //         WHERE u.id = m.id_apprenant";
    //
    // $sth = $this->dbh->prepare($sql);
    // $sth->execute();
    //
    // $result = $sth->fetchAll();
    //
    // return $result;

  } //ferme la méthode findApprenant

} //ferme la class messagesModel
