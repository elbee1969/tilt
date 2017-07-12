<?php

namespace Controller;

use \Controller\TiltController;
use \Service\Tools\CleanTool;
use \Service\Tools\ValidationTool;
use \Model\UsersModel;
use \Model\TutoratModel;
use \Model\RegionsModel;
use \Model\CompetencesModel;

class TutoratController extends TiltController
{

	/**
	 * Page d'accueil par défaut
	 */
	public function tutorat()
	{

		$model 	= new UsersModel();
		// $user = new UsersModel();
		$user = $this->getUser();
		//
				$region_id = $user['region_id'] ;

				$apprenants = $model->findApprenantsInRegionById($region_id);
				$enseignant = $model->findEnseignantsInRegionById($region_id);
				//debug($user);
				// debug($apprenants);

					$this->show('tutorat/tutorat', array(
						'apprenants' => $apprenants,
						'user'			 =>	$user
					));
	}

	/**
	 * [messagesAction description]
	 * @return [type] [description]
	 */
	public function messagesAdd()
	{
		$user 			= new UsersModel();
		$message 		= new MessagesModel();
		$clean   		= new CleanTool();
		$validation = new ValidationTool();
		$post       = $clean->cleanPost($_POST);
			$pseudo    = $post['message'];
			$errors['message'] = $validation->textValid($message,'message',2,1000);
			if($validation->IsValid($errors) == false){
				$this->show('messages/messages', array(
					'errors'   => $errors
				));
			} else {
				  $data = array(
						'message' => $message,
						);

            $message->insert($data);

			}
		}




}
