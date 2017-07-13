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
use \W\Model\Model;

class AvatarController extends TiltController {

  public function addAvatar()
  {
    $this->allowTo(['admin','apprenant','enseignant','guest']);
    $user = $this->getUser();
    $avatar = array();
      if(!empty($user['avatar'])) {
            $modelAvatar = new AvatarModel();
            $avatar = $modelAvatar->checkIfAvatarExists($user['avatar']);
      }

      $this->show('users/avatar', array(
        'avatar' => $avatar
      ));
  }

  public function addAvatarAction(){

    $this->allowTo(['admin','apprenant','enseignant','guest']);
    $user = $this->getUser();
    $avatar = array();
      if(!empty($user['avatar'])) {
            $modelAvatar = new AvatarModel();
            $avatar = $modelAvatar->checkIfAvatarExists($user['avatar']);
      }


    $errors = array();
    $validation   = new ValidationTool();
    $modelavatar  = new AvatarModel();
    $modeluser    = new UsersModel();
    $clean        = new CleanTool();
    $auth         = new AuthentificationModel();

    $sizeMax = 2096000; // 2MO
    $extensions = array('.jpg', '.png', '.jpeg');
    $extensionsmime = array('image/jpeg', 'image/png','image/jpg' );

    $errors['avatar'] = $validation->uploadValid($_FILES['avatar'],$sizeMax,$extensions,$extensionsmime);

    if($validation->IsValid($errors)){
      $path = 'assets/img/avatar/';


      $des = $_SERVER['DOCUMENT_ROOT'] . '/tilt/public/' . $path;
      $ext = $clean->getExtension($_FILES['avatar']['name']);
      $imgname = time().'-'. $clean->slugify( $clean->deleteextension($_FILES['avatar']['name'])).'.'.$ext;

      $date = new \DateTime();

      if(move_uploaded_file($_FILES['avatar']['tmp_name'],$des.$imgname)) {

        if(!empty($avatar)) {
              // update

              $data = array(
                'name_original' => $_FILES['avatar']['name'],
                'name' => $imgname,
                'path'  => $path,
                'mime_type'  => 'image',
                'modified_at'  => $date->format('Y-m-d H:i:s')
              );

                 $modelavatar->update($data,$avatar['id']);


        } else {
          $data = array(
            'name_original' => $_FILES['avatar']['name'],
            'name' => $imgname,
            'path'  => $path,
            'mime_type'  => 'image',
            'created_at'  => $date->format('Y-m-d H:i:s')
          );

          $newid = $modelavatar->insert($data);
          $data_user = array(
            'avatar'  => $newid['id']
          );
          $modeluser->update($data_user,$user['id']);
          $auth->refreshUser();

        }

        $this->redirectToRoute('users_profil');

      }

    } else {
      $this->show('users/avatar', array(
        'errors'   => $errors,
      ));
    }




  }
}
