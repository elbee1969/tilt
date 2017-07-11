<?php

namespace Model;

use \W\Model\Model;
use \W\Model\ConnectionModel;

class MessagesModel extends Model {



  // ici dans le Blog nous avons fait un __construct qui utilise ls méthodes setTbale et getDbh
  public function __construct() {
    $this->setTable('tilt_messages');
    $this->dbh = ConnectionModel::getDbh();
  } //ferme le constructeur

  // méthode pour trouver tous les messages
  /**
   * [findAllMessages description]
   * @return [array] [tous les messages]
   */
  public function findAllMessages() {

    $sql = "SELECT id, message
            FROM tilt_messages";

    $sth = $this->dbh->prepare($sql);
    $sth->execute();

    $result = $sth->fetchAll();

    return $result;

  } //ferme la méthode findAllmessages

  // méthode pour trouver les messages d'un appreant
  public function findMessage() {

    $sql = "SELECT m.id, m.id_enseignat, m.id_apprenant, u.id, u.pseudo
            FROM tilt_messages AS m
            LEFT JOIN tilt_users AS u
            ON m.id = u.id_enseignant
            WHERE u.id = m.id_apprenant";

    $sth = $this->dbh->prepare($sql);
    $sth->execute();

    $result = $sth->fetchAll();

    return $result;

  } //ferme la méthode findApprenant

} //ferme la class messagesModel
