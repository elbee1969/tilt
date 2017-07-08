<?php
namespace Controller;

use \Controller\TiltController;
use \Model\UsersModel;
use \Service\Tools\CleanTool;
use \Service\Tools\ValidationTool;
use \W\Security\AuthentificationModel;
use \W\Security\StringUtils;

class UsersController extends TiltController {


  public function passwordForget()
    {
      $this->show('users/passwordforget');
    }

    public function profil()
      {
        $this->show('users/profil');
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

  /**
     * [affichage du formulaire d'inscription]
     * @return [type] [description]
     */
    public function register()
    {
        $user = $this->getUser();
        if(!empty($user)) {  $this->redirectToRoute('default_home'); }
        $this->show('users/register');
    }
    /**
     * [registerAction description]
     * @return [type] [description]
     */
    public function registerAction()
    {
      $errors = array();

      $clean      = new CleanTool();
      $validation = new ValidationTool();
      $model      = new UsersModel();
      $auth       = new AuthentificationModel();

      $post       = $clean->cleanPost($_POST);
        $pseudo    = $post['pseudo'];
        $prenom    = $post['prenom'];
        $nom       = $post['nom'];
        $email     = $post['email'];
        $region    = $post['region'];
        $password  = $post['password'];
        $password2 = $post['password2'];

        // validation username
        $errors['pseudo'] = $validation->textValid($pseudo,'pseudo');
        if($errors['pseudo'] != '') {
          if($model->usernameExists($pseudo)){
              $errors['pseudo'] = 'Ce pseudo existe déjà !';
            }
        }
        // validation $email
        if (!empty($email)) {
            $errors['email'] = $validation->emailValid($post['email']);
                if ($validation->IsValid($errors) == false) {
                  if($model->emailExists($email)){
                    $errors['email'] = 'Ce email existe déjà !';
                  }
                }
        } else {
          $errors['email'] = '* Format de mail invalide.';
        }
        $errors['nom'] = $validation->textValid($nom,'nom');
        $errors['prenom'] = $validation->textValid($prenom,'prenom');

        if(!empty($region)){
          if(!is_numeric($region)){
            $errors['region'] = 'Vous devez entrer un chiffre';
          }elseif($region > 13 || $region < 0){
            $errors['region'] = 'Vous devez entrer un chiffre entre 0 et 13';
          }
        }else{
          $errors['region'] = '* Veuillez saisir une region';
        }


        // validation password
        $errors['password'] = $validation->textValid($password,'password',8);
        if ($password !== $password2){
          $errors['password'] = 'Les password sont différents';
        }

          if($validation->IsValid($errors) == false){
            $this->show('users/register', array(
              'errors'   => $errors
            ));
          } else {
              $role ='apprenant';
              $passwd = $auth->hashPassword($password);
              $token =  StringUtils::randomString();
              $datenow = new \DateTime;
              $data = array(
                'pseudo'      => $pseudo,
                'email'       => $email,
                'password'    => $passwd,
                'token'       => $token,
                'first_name'  => $prenom,
                'last_name'   => $nom,
                'role'        => $role,
                'region_id'   => $region,
                'avatar'      => 0,
                'created_at'  => $datenow->format('Y-m-d H:i:s'),
                'status'      => 1,
              );
// debug($data);
// die();
              $model->insert($data);
              $this->flash('utilisateur bien enrengistrer');
              $this->redirectToRoute('login');
          }
    }

      /**
       * [login description]
       * @return [type] [description]
       */
      public function login()
      {
        $user = $this->getUser();
        //var_dump($user);
        if(!empty($user)) {  $this->redirectToRoute('default_home'); }
        $this->show('users/login');
      }
      /**
       * [loginAction description]
       * @return [type] [description]
       */

      public function loginAction()
      {
        $errors = array();
        $clean      = new CleanTool();
        $validation = new ValidationTool();
        $auth       = new AuthentificationModel();
        $model      = new UsersModel();

          $post        = $clean->cleanPost($_POST);
            $connexion = $post['connexion'];
            $password  = $post['password'];
            $user = $model->getUserByUsernameOrEmail($connexion);

            $errors['connexion'] = $validation->textValid($connexion,'identifiant de connexion');
            if($errors['connexion'] != '') {
              if (empty($user)){ $errors['connexion'] = 'Utilisateur inconnu !'; }
            }
            $errors['password'] = $validation->textValid($password,'password');

            if($auth->isValidLoginInfo($connexion, $password) == 0){
              $errors['connexion'] = 'erreur de connexion';
            }

              if($validation->IsValid($errors) == false){
                $this->show('users/login', array(
                  'errors'   => $errors
                ));
              } else {
                $auth->logUserIn($user);
                $this->flash('Bienvenue');
                $this->redirectToRoute('default_home');
              }
      }

      /**
       * [logout description]
       * @return [type] [description]
       */
      public function logout(){
        $auth = new AuthentificationModel();
        $auth->logUserOut();
        $this->redirectToRoute('default_home');
      }








  }
