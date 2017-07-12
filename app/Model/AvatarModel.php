<?php

namespace Model;

use \W\Model\ConnectionModel;
use \W\Model\Model;
use \W\Security\AuthentificationModel;
use \W\Model\UsersModel as WUsersModel;

class AvatarModel extends Model
 {

   public function insertAvatar(){

     $imgName = $_FILES['avatar']['name'];
    //  $des = (dirname(__FILE__).'/public/assets/img/avatar/ ');
     $des = $_SERVER['PHP_SELF'];
     $mime = $_FILES['avatar']['type'];
     $avatarName = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $imgName)));

     $connectedUser = new AuthentificationModel();
     $a = $connectedUser->getLoggedUser();
     $userId = $a['id'];

     $sql = "INSERT INTO tilt_avatar (name_original, name, path, mime_type, created_at, user_id)
             VALUES ('$imgName', '$avatarName', '$des', '$mime', NOW(), '$userId')";

     $sth = $this->dbh->prepare($sql);
     $sth->execute();


   }

   public function checkIfAvatarExists(){

     $connectedUser = new AuthentificationModel();
     $a = $connectedUser->getLoggedUser();
     $userId = $a['id'];

     $sql = "SELECT user_id FROM tilt_avatar";

     $sth = $this->dbh->prepare($sql);
     $sth->execute();
     $result = $sth->fetchAll();

     if (in_array($userId, $result)) {
       // L'utilisateur à deja un avatar
       return "True";

     } else {
       return "False";
     }

    //  return $result;
   }

   public function updateAvatar(){


   }


 }
