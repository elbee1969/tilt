<?php

namespace Model;

use \W\Model\ConnectionModel;
use \W\Model\Model;
use \W\Security\AuthentificationModel;
use \W\Model\UsersModel as WUsersModel;

class AvatarModel extends Model
 {


   public function checkIfAvatarExists($id)
   {

     $sql = "SELECT * FROM tilt_avatar WHERE id = '$id' ";

     $sth = $this->dbh->prepare($sql);
     $sth->execute();
     $result = $sth->fetch();

      return $result;
   }

   public function updateAvatar(){

   }

   public function getAvatarFromIntermUserId($intermUserId) {

     $sql = "SELECT i.user_id, u.id, u.avatar, a.id, a.path, a.name
             FROM tilt_interm AS i
             LEFT JOIN tilt_user AS u
             ON i.user_id = u.id
             LEFT JOIN tilt_avatar AS a
             ON u.avatar = a.id
             WHERE u.id = :intermUserId";

     $sth = $this->dbh->prepare($sql);
     $sth->bindValue(':intermUserId', $intermUserId);
     $sth->execute();

     $result = $sth->fetchAll();

     return $result;

   } // ferme la méthode getAvatarFromIntermUserId 

 } // ferme la classe AvatarModel
