<?php
namespace Controller;

use \Controller\TiltController;
use \Model\CompetencesModel;
use \Model\UsersModel;
use \Model\AvatarModel;
use \Service\Tools\CleanTool;
use \Service\Tools\ValidationTool;
use \W\Security\AuthentificationModel;
use \W\Security\StringUtils;
use \Model\RegionsModel;
use \Model\AdresseModel;

class UsersController extends TiltController {



  public function adresse()
  {
  	$loggedUser = $this->getUser();
  	//debug($loggedUser);
  }


  public function passwordForget()
    {
      $this->show('users/passwordforget');
    }



    public function profil()
    {
      $this->allowTo(['admin','apprenant','enseignant', 'guest']);

      $user = $this->getUser();
      $avatar = array();

        if(!empty($user['avatar'])) {
              $modelAvatar = new AvatarModel();
              $avatar = $modelAvatar->checkIfAvatarExists($user['avatar']);
        }


      $regionNamefromId = new RegionsModel();
      $regionName = $regionNamefromId->findRegionName($user['region_id']);

      $adresseFromId = new AdresseModel();
      $adresse = $adresseFromId->getUserAdresse($user['id']);

      $this->show('users/profil', ['regionName' => $regionName,
                                    'avatar'  => $avatar,
                                    'adresse' => $adresse]);

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
              if (!empty($user)) {

                // Envoie de mail
                $to = 'laurent.berthelot1969@gmail.com';
                $subject = 'Génération de votre nouveau mot de passe';
                $html = '<a href="'. $this->generateUrl('newpassword').'?email='.urlencode($user['email']).'&token='.$user['token'].'">
                 <p class="center">Simulation d\'envoi de mail avec lien de création d\'un nouveau mot de passe</p>
                </a>';
                $header = "From: ".$user['first_name'].' '.$user['last_name']. " <" . $email . ">\r\n"; //optional headerfields
                echo $html;

                ini_set("SMTP",'localhost' );
		            ini_set('sendmail_from', $email);
		          //  $mail = mail($to,$subject, $html, $header);
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
                  $error['password'] = $validation->textValid($_POST['newpassword'], 'newpassword', 8, 50);


                  if ($password1 == $password2) { $error['password'] = $validation->textValid($_POST['newpassword'], 'newpassword', 3, 50);
                  } else {   $error['password'] = 'les mots de passe sont différents ';  }

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
        $regionsList = new RegionsModel();
        $allRegions = $regionsList->findAllRegions();
        $user = $this->getUser();
        if(!empty($user)) {  $this->redirectToRoute('default_home'); }
        $this->show('users/register', ['allRegions' => $allRegions]);
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
                if ($validation->IsValid($errors) == false) { //ici il faut enlever le false et inverser la condition (Antoine)
                  if($model->emailExists($email)){
                    $errors['email'] = 'Ce email existe déjà !';
                  }
                }
        } else {
          $errors['email'] = '* Format de mail invalide.';
        }
        $errors['nom'] = $validation->textValid($nom,'nom');
        $errors['prenom'] = $validation->textValid($prenom,'prenom');

        // validation password
        $errors['password'] = $validation->textValid($password,'password',8);
        if ($password !== $password2){
          $errors['password'] = 'Les password sont différents';
        }

          //pour réafficher la liste des régions dans la liste déroulante
          $regionsList = new RegionsModel();
          $allRegions = $regionsList->findAllRegions();

          if($validation->IsValid($errors) == false){ //ici il faut enlever le false et inverser la condition (Antoine)
            $this->show('users/register', array(
              'errors'   => $errors,
              'allRegions' => $allRegions
            ));
          } else {
              $role ='guest';
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
                'avatar'      => 1,
                'created_at'  => $datenow->format('Y-m-d H:i:s'),
                'status'      => 1,
              );
// debug($data);
// die();
              $model->insert($data);
              $this->flash('utilisateur bien enregistré');
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






      public function addAdress()
    	{
    		$loggedUser = $this->getUser();
    		$this->show('Users/adresse');
    	}




      public function addAdressAction() {


        $errors = array();
        $clean      = new CleanTool();
        $validation = new ValidationTool();
        $modeluser  = new UsersModel();
        $auth       = new AuthentificationModel();
        $add        = new AdresseModel();
        // debug($_POST);
          $user = $this->getUser();
          $post = $clean->cleanPost($_POST);
          $number = $post['number'];
          $street = $post['street'];
          $city = $post['city'];
          $postal = $post['postal'];
          $prenom = $post['prenom'];
          $nom = $post['nom'];

          $errors['nom'] = $validation->textValid($nom, 'nom', 3, 30);
          $errors['prenom'] = $validation->textValid($prenom, 'prenom', 3, 30);
          $errors['number'] = $validation->textValid($number, 'numéro de rue', 1, 7);
          $errors['street'] = $validation->textValid($street, 'nom de rue', 3, 30);
          $errors['city'] = $validation->textValid($city, 'nom de ville', 3, 30);
          $errors['postal'] = $validation->textValid($postal, 'code postal', 3, 5);

          if($validation->IsValid($errors) == false){
            $this->show('users/adresse', array(
              'errors'   => $errors,
            ));

          } else {

            $data = array(
              'id_user' => $user['id'],
              'nom' => $nom,
              'prenom' => $prenom,
              'num_rue' => $number,
              'nom_voie' => $street,
              'ville'    => $city,
              'code_postal' => $postal,
            );

            $add->insert($data);
            $this->redirectToRoute('users_profil');

          }

      }

      public function adressUpdate()
      {
        $add        = new AdresseModel();
        $loggedUser = $this->getUser();
        $adresse = $add->getUserAdresse($loggedUser['id']);

        $this->show('Users/adresseupdate', array(
          'nom' => $adresse['nom'],
          'prenom' => $adresse['prenom'],
          'num_rue' => $adresse['num_rue'],
          'nom_voie' => $adresse['nom_voie'],
          'ville'    => $adresse['ville'],
          'code_postal' => $adresse['code_postal']
        ));
      }

      public function addAdressUpdate(){

        $errors = array();
        $clean      = new CleanTool();
        $validation = new ValidationTool();
        $auth       = new AuthentificationModel();
        $add        = new AdresseModel();
        $user = $this->getUser();
        $id = $user['id'];

        $adresse = $add->getUserAdresse($id);

        debug($adresse);
        // die();

        // $resultat = $add->findAll($id);
        //
        // debug($resultat);

        $post = $clean->cleanPost($_POST);

        $nom = $post['nom'];
        $prenom = $post['prenom'];
        $number = $post['number'];
        $street = $post['street'];
        $city = $post['city'];
        $postal = $post['postal'];

        $errors['nom'] = $validation->textValid($nom, 'nom', 3, 20);
        $errors['prenom'] = $validation->textValid($prenom, 'prenom', 3, 20);
        $errors['number'] = $validation->textValid($number, 'numéro de rue', 1, 7);
        $errors['street'] = $validation->textValid($street, 'nom de rue', 3, 30);
        $errors['city'] = $validation->textValid($city, 'nom de ville', 3, 30);
        $errors['postal'] = $validation->textValid($postal, 'code postal', 3, 5);

        if($validation->IsValid($errors) == false){
          $this->show('users/adresseupdate', array(
            'errors'   => $errors,
          ));

        } else {

          $data = array(
            'nom' => $nom,
            'prenom' => $prenom,
            'num_rue' => $number,
            'nom_voie' => $street,
            'ville'    => $city,
            'code_postal' => $postal
            );


          if(!empty($adresse)) {
              $add->update($data, $adresse['id']);
          } else {
              $add->insert($data);
          }




          $this->redirectToRoute('users_adresse_update');
        }

      }
//méthodes pour l'affichage et l'inscription des apprenants
//
//
/**
 * Page d'accueil par défaut
 */
  public function inscrapprenant()
  {


    $this->show('users/inscrapprenant');
  }

  public function inscrapprenantAction()
  {

    $modeluser = new UsersModel();
    $auth = new AuthentificationModel();
    $user = $this->getUser();
    $id = $user['id'];
    $apprenant = 'apprenant';

    $data = array(
      'role' => $apprenant,
    );

    $modeluser->update($data, $id);
    $auth->logUserOut();
    $this->redirectToRoute('login');
    $this->show('users/inscrapprenant');

  }

//fin méthodes pour l'affichage et l'inscription des apprenants

////méthodes pour l'affichage et l'inscription des enseignants

public function inscrenseignant()
{


  $this->show('users/inscrenseignant');
}

public function inscrenseignantAction()
{

  $modeluser = new UsersModel();
  $auth = new AuthentificationModel();
  $user = $this->getUser();
  $id = $user['id'];
  $enseignant = 'enseignant';

  $data = array(
    'role' => $enseignant,
  );

  $modeluser->update($data, $id);
  $auth->logUserOut();
  $this->redirectToRoute('login');

  $this->show('users/inscrenseignant');

}

////méthodes pour l'affichage et l'inscription des enseignants













  }
