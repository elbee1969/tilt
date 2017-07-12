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
  public function findMessageApprenant($id,$userid) {

        $sql = "SELECT m.message, u.id, m.created_at
                FROM tilt_messages AS m
                INNER JOIN tilt_user AS u
                ON m.id_apprenant = u.id
                WHERE m.id_enseignant = $id AND  m.id_apprenant = $userid";

    $sth = $this->dbh->prepare($sql);
    $sth->execute();

    $result = $sth->fetchAll();

    return $result;

  } //ferme la méthode findMessage

} //ferme la class messagesModel
