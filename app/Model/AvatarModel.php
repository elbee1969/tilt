<?php

namespace Model;

use \W\Model\ConnectionModel;
use \W\Model\Model;
use \W\Security\AuthentificationModel;
use \W\Model\UsersModel as WUsersModel;

class AvatarModel extends Model
 {


   public function checkIfAvatarExists()
   {

     $sql = "SELECT * FROM tilt_avatar WHERE id = '$id' ";

     $sth = $this->dbh->prepare($sql);
     $sth->execute();
     $result = $sth->fetch();

      return $result;
   }

   public function updateAvatar(){


   }


 }
