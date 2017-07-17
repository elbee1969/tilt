<?php
namespace Model;

use \W\Model\Model;
use \W\Model\ConnectionModel;

class AdresseModel extends Model {

  public function getUserAdresse($userId) {

    $sql = "SELECT * FROM $this->table WHERE id_user = :userId";

    $sth = $this->dbh->prepare($sql);
    $sth->bindValue(':userId', $userId);
    $sth->execute();

    $result = $sth->fetch();

    return $result;

  } //ferme la méthode getUserAdresse


} // ferme la classe AdressModel
