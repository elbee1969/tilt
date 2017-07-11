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
				$regionslug = 'hauts-de-france' ;
				//$user = $model->find($id);
				//$enseignant = $model->find($id);
				$apprenants = $model->findApprenantsInRegion($regionslug);
//debug($enseignant);
//echo $user;
debug($apprenants);
//die();
				if(!empty($apprenants)){

					$this->show('tutorat/tutorat', array(
						'apprenants' => $apprenants
					));
				}else{

					$this->show('tutorat/tutorat');
				}

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
