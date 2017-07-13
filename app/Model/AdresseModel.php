<?php
namespace Model;

use \W\Model\Model;
use \W\Model\ConnectionModel;

class AdresseModel extends Model {

<<<<<<< HEAD:app/Model/AdresseModel.php
  public function InsertAdresse(){

    $connectedUser = new AuthentificationModel();
    $a = $connectedUser->getLoggedUser();
    $userId = $a['id'];
    $last_name = $a['last_name'];
    $first_name

    $number = $_POST['number'];
    $street = $_POST['street'];
    $city = $_POST['city'];
    $postal = $_POST['postal'];

    $sql = "INSERT INTO tilt_adresse (name_original, name, path, mime_type, created_at, user_id)
            VALUES ('$imgName', '$avatarName', '$des', '$mime', NOW(), '$userId')";

    $sth = $this->dbh->prepare($sql);
    $sth->execute();
  }
=======
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
>>>>>>> 3db56dcc60eaf456894bab7de9ff105bee92533b:app/Model/AdressModel.php
}
