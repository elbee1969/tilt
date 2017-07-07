<?php
namespace Controller;

use \Controller\DefaultController;
use \Service\Tools\Tools;
use \Service\Tools\CleanTool;
use \Service\Tools\ValidationTool;
use \W\Security\AuthentificationModel;
use \W\Security\StringUtils;

class UsersController extends AppController {


  public function passwordForget()
    {
      $this->show('users/passwordforget');
    }

    public function passwordForgetAction(){

      $error = array();
      // Instanciation de la classe ValidationTool pour atteindre la méthode de vérification d'email.
      $validation = new ValidationTool();
      // Instanciation de la classe CleanToolTool pour trim, strip tags de l'email.
      $clean = new CleanTool();
      // Instanciation de la classe UsersModel pour utilisé la méthode emailExists.
      $model = new UsersModel();

      $post = $clean->cleanPost($_POST);
      $email = $post['email'];

      if (!empty($email)) {

          $error['email'] = $validation->emailValid($post['email']);
              if ($validation->IsValid($error)) {

                $user = $model->getUserByUsernameOrEmail($email);
                debug($user);
                if (!empty($user)) {

                  // Envoie de mail

                  $html = '<a href="'. $this->generateUrl('newpassword').'?email='.urlencode($user['email']).'&token='.$user['token'].'">Click ici</a>';
                  echo $html;

                  die();

                  $message = 'le mail à bien été envoyé';
                  $this->flash($message);

                } else {
                  $error['email'] = 'le mail existe pas';
                }

              }

        } else {
          $error['email'] = 'Veuillez renseigner un mail';
        }


      $this->show('users/passwordforget', array(
        'error' => $error,
      ));

    }

    public function newPassword()
    {
      $model = new UsersModel();
      if(!empty($_GET['email']) && $_GET['token']) {
            $email = urldecode($_GET['email']);
            $token = $_GET['token'];
            $user = $model->getUserByUsernameOrEmail($email);
              if(!empty($user)) {
                  if($user['token'] == $token) {
                    $this->show('users/newpassword');
                  }
              }
      }
      $this->showNotFound();
    }

    public function newPasswordAction()
    {
      $error = array();
      $validation = new ValidationTool();
      $clean = new CleanTool();
      $model = new UsersModel();
      $auth = new AuthentificationModel();

      if(!empty($_GET['email']) && $_GET['token']) {
            $email = urldecode($_GET['email']);
            $token = $_GET['token'];
            $user = $model->getUserByUsernameOrEmail($email);
              if(!empty($user)) {
                  if($user['token'] == $token) {



                    $post = $clean->cleanPost($_POST); $password1 = $post['newpassword']; $password2 = $post['confpassword'];

                    if ($password1 == $password2) { $error['password'] = $validation->textValid($_POST['newpassword'], 'newpassword', 3, 50);
                    } else {   $error['password'] = 'les mot de passe sont diffreents ';  }

                    if ($validation->IsValid($error)) {

                          $hashedPassword = $auth->hashPassword($password1);
                          $token = StringUtils::randomString(80);

                          $data = array(
                            'password'   => $hashedPassword,
                            'token'    => $token
                          );
                          $model->update($data,$user['id']);

                          // flash

                          $this->redirectToRoute('login');


                    } else {
                      $this->show('users/newpassword', array(
                        'error' => $error,
                      ));
                    }


                  }
              }
      }

      $this->showNotFound();
    }
  }
