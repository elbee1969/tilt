<?php
namespace Model;

use \W\Model\Model;
use \W\Model\ConnectionModel;

class AdresseModel extends Model {

  // public function InsertAdress(){
  //
  //   // $connectedUser = new AuthentificationModel();
  //   // $a = $connectedUser->getLoggedUser();
  //   // $userId = $a['id'];
  //   // $last_name = $a['last_name'];
  //   // $first_name
  //   //
  //   // $number = $_POST['number'];
  //   // $street = $_POST['street'];
  //   // $city = $_POST['city'];
  //   // $postal = $_POST['postal'];
  //   //
  //   // $sql = "INSERT INTO tilt_adresse (name_original, name, path, mime_type, created_at, user_id)
  //   //         VALUES ('$imgName', '$avatarName', '$des', '$mime', NOW(), '$userId')";
  //   //
  //   // $sth = $this->dbh->prepare($sql);
  //   // $sth->execute();
  // }

  public function getUserAdresse($userId) {

    $sql = "SELECT * FROM `tilt_adresse` WHERE id_user = :userId";

    $sth = $this->dbh->prepare($sql);
    $sth->bindValue(':userId', $userId);
    $sth->execute();

    $result = $sth->fetchAll();

    return $result;

  } //ferme la méthode getUserAdresse


} // ferme la classe AdressModel