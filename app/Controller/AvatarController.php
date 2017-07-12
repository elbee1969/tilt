<?php
namespace Controller;

use \Controller\TiltController;
use \Model\UsersModel;
use \Model\AvatarModel;
use \Service\Tools\CleanTool;
use \Service\Tools\ValidationTool;
use \W\Security\AuthentificationModel;
use \W\Security\StringUtils;
use \Model\RegionsModel;

class AvatarController extends TiltController {

  public function addAvatar() {

    $this->show('users/avatar');

  }

  public function addAvatarAction(){

    $errors = array();
    $validation = new ValidationTool();
    $model      = new AvatarModel();

    $avatar = $_FILES['avatar'];
    $sizeMax = 2096000; // 2MO
    $extensions = array('.jpg', '.png', '.jpeg');
    $extensionsmime = array('image/jpeg', 'image/png' );

    $file = $_FILES['avatar']['tmp_name'];
    $image = addslashes(file_get_contents($_FILES['avatar']['tmp_name']));
    $imgName = addslashes($_FILES['avatar']['name']);
    $imgSize = getimagesize($_FILES['avatar']['tmp_name']);
    $des = 'C:\xampp\htdocs\tilt\tilt\public\assets\img\avatar\avatar';

    echo $imgName;

    // debug($_FILES);
// debug($avatar);
    $errors['avatar'] = $validation->uploadValid($avatar,$sizeMax,$extensions,$extensionsmime);

    if($validation->IsValid($errors) == false){
      $this->show('users/avatar', array(
        'errors'   => $errors,
      ));

    } else {
      move_uploaded_file($file,$des.$imgName);
      debug($_FILES);
      // debug($_GET);
      $data = array(
        'name' => $imgName,
      );

      $model->insertAvatar();
      $this->show('users/avatar');
      }


  }
}
