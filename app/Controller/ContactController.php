<?php

namespace Controller;

use \Controller\TiltController;

use \Service\Tools\CleanTool;
use \Service\Tools\ValidationTool;

class ContactController extends TiltController
{

	/**
	 * Page d'accueil par défaut
	 */
	public function contact()
	{


		$this->show('default/contact');
	}

	public function contactAction()
		{

			$errors = array();

			$clean      = new CleanTool();
			$validation = new ValidationTool();

			$post = $clean->cleanPost($_POST);

			 if(!empty($_POST['btnSubmit'])){
			   $to = 'laurent.berthelot1969@gmail.com';
			   //faille xss
				 $prenom    = $post['prenom'];
				 $nom       = $post['nom'];
				 $email     = $post['email'];
				 $message   = $post['message'];


			   $header = "From: ".$prenom.' '.$nom. " <" . $email . ">\r\n"; //optional headerfields
			   //gestion des erreurs
				 $errors['prenom']	 = $validation->textValid($prenom,'prenom');
				 $errors['nom'] 		 = $validation->textValid($nom,'nom');
				 $errors['message']  = $validation->textValid($message,'message');

				 if(!empty($email)){

					 $error['email']		 = $validation->emailValid($email);
				 }else{
					 $errors['email'] = 'Vous devez renseigner un mail';
				 }


			   $subject = 'demande d\'information';
				 if($validation->IsValid($errors) == false){
		       $this->show('default/contact', array(
		         'errors'  => $errors,
		       ));
		     }else{
			  ini_set("SMTP",'localhost' );
			  ini_set('sendmail_from', $email);
			  $mail = mail($to,$subject, $message, $header);
			  }
			}

			$this->flash('mail bien envoyé');
			$this->redirectToRoute('default_home');

		}


}
