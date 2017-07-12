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
		$modelregion = new RegionsModel();
		//recupératuin du user connecté
		$user = $this->getUser();
		// récupération de la région du user connecté
		$region = $modelregion->findRegionName($user['region_id']);
		// si enseignant on utilise $userE
		if($user['role'] == 'enseignant'){
			$userE = $this->getUser();
		}
		// si apprenant on utilise $userA
		if($user['role'] == 'apprenant'){
			$userA = $this->getUser();
		}
		//
				$region_id = $user['region_id'] ;

				$enseignants = $model->findEnseignantsInRegionById($region_id);
				$apprenants = $model->findApprenantsInRegionById($region_id);

				//debug($user);
				if(in_array($user['role'], ['apprenant', 'enseignant'])){
//si enseignant renvoi la liste de appreants:
					  if(in_array($user['role'], ['enseignant'])){
							//debug($apprenants);
							$this->show('tutorat/tutorat', array(
								'apprenants' => $apprenants,
								'user'			 =>	$user,
								'region'     => $region
							));
						}
//si apprenant renvoi liste des enseignants:
						if(in_array($user['role'], ['apprenant'])){
							//debug($enseignants);
							$this->show('tutorat/tutorat', array(
								'enseignants' => $enseignants,
								'user'			 =>	$user,
								'region'     => $region
							));
						}
				} else {
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
