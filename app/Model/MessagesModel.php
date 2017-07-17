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

  // méthode pour trouver les messages reçus

  /**
   * [findMessageApprenant description]
   * @param  [int] $id     [id enseignant]
   * @param  [int] $userid [id apprenant]
   * @return [array]         [messages de apprenant]
   */
  public function findMessageFrom($id,$userid) {

        $sql = "SELECT m.message, m.id_emetteur, m.id_recepteur, m.id AS id_msg, u.id, m.created_at
                FROM tilt_messages AS m
                INNER JOIN tilt_user AS u
                ON m.id_emetteur = u.id
                WHERE m.id_recepteur = $id AND  m.id_emetteur = $userid AND m.status_r = 1
                ORDER BY created_at DESC
                LIMIT 5";

    $sth = $this->dbh->prepare($sql);
    $sth->execute();

    $result = $sth->fetchAll();

    return $result;

  } //ferme la méthode findMessageApprenant

  // méthode pour trouver les messages envoyés

  /**
   * [findMessageApprenant description]
   * @param  [int] $id     [id enseignant]
   * @param  [int] $userid [id apprenant]
   * @return [array]         [messages de enseignant]
   */
  public function findMessageTo($id,$userid) {

        $sql = "SELECT m.message, m.id_emetteur, m.id_recepteur, m.id AS id_msg, u.id, m.created_at
                FROM tilt_messages AS m
                INNER JOIN tilt_user AS u
                ON m.id_emetteur = u.id
                WHERE m.id_emetteur = $id AND  m.id_recepteur = $userid AND m.status_e = 1
                ORDER BY created_at DESC
                LIMIT 5";

    $sth = $this->dbh->prepare($sql);
    $sth->execute();

    $result = $sth->fetchAll();

    return $result;

  } //ferme la méthode findMessageEnseignant

  public function countMessages()
  {
  $sql ="SELECT id FROM tilt_messages";
          $sth = $this->dbh->prepare($sql);
          $sth->execute();
          $result = $sth->fetchAll();
          return count($result);
  }


} //ferme la class messagesModel
