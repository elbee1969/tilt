<?php

namespace Controller;

use \Controller\TiltController;
use \Service\Tools\CleanTool;
use \Service\Tools\ValidationTool;
use \Model\UsersModel;
use \Model\MessagesModel;

class MessagesController extends TiltController
{

	/**
	 * Page d'accueil par défaut
	 */
	public function messages($id,$user_id)
	{
		$modelmsg 	= new MessagesModel();
		$modeluser 	= new UsersModel();
		//recupération des infos $user_id passé en POST
		$user = $modeluser->find($user_id);
		// récupération du prénom pour le passer et l'afficher dans la page message
		$prenom = $user['pseudo'];


				$messages = $modelmsg->findMessageApprenant($id,$user_id);
				$selfmessages = $modelmsg->findMessageApprenant($user_id,$id);
				if(!empty($messages)){
					$this->show('messages/messages', array(
						'messages' 		=> $messages,
						'selfmessages' => $selfmessages,
						'prenom'  		=> $prenom
					));
				}else{
					$this->show('messages/messages');
				}
	}

	/**
	 * [messagesAction description]
	 * @return [type] [description]
	 */
	public function messagesAdd($id,$user_id)
	{
		$errors = array();
		$user 					= new UsersModel();
		$newmessage 		= new MessagesModel();
		$clean   				= new CleanTool();
		$validation 		= new ValidationTool();
		$auth         = new AuthentificationModel();
			$post      = $clean->cleanPost($_POST);
			$message    = $post['message'];
			$errors['message'] = $validation->textValid($message,'message',2,500);

			if($validation->IsValid($errors) == false){
				$this->show('messages/messages', array(
					'errors'   => $errors
				));
			} else {
				// si pas d'error  insert
					$datenow = new \DateTime;
				  $data = array(
						'id_apprenant' 	=> $user_id,
						'id_enseignant' => $id,
						'message'				=> $message,
						'updated_at'  	=> $datenow->format('Y-m-d H:i:s'),
						'status'      	=> 1
						);

            $newmessage->insert($data);
						//$auth->refreshUser();
						$this->show('messages/messages');
			}
		}




}
