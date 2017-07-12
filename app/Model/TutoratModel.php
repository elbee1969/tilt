<?php

namespace Model;

use \W\Model\Model;
use \W\Model\ConnectionModel;

class TutoratModel extends Model {



  // ici dans le Blog nous avons fait un __construct qui utilise ls méthodes setTbale et getDbh
  public function __construct() {
    $this->setTable('tilt_tutorat');
    $this->dbh = ConnectionModel::getDbh();
  } //ferme le constructeur

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
