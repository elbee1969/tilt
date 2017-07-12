<?php

namespace Model;

use \W\Model\ConnectionModel;
use \W\Model\Model;
use \W\Model\UsersModel as WUsersModel;

class AvatarModel extends Model
 {

   public function insertAvatar(){

     $imgName = $_FILES['avatar']['name'];
     $des = 'C:\xampp\htdocs\tilt\tilt\public\assets\img\avatar\ ';
     $mime = $_FILES['avatar']['type'];

     $sql = "INSERT INTO tilt_avatar (name_original, path, created_at)
             VALUES ('$imgName', '$des', NOW())";



     $sth = $this->dbh->prepare($sql);

     $sth->execute();

    //  $sql2 = "";


   }


 }
