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

		$model 	= new TutoratModel();
		$modelregion = new RegionsModel();
		//recupératuin du user connecté
		$user = $this->getUser();
		// récupération de la région du user connecté
		$region = $modelregion->findRegionName($user['region_id']);

		//
				$region_id = $user['region_id'] ;
				// if($user['role'] == 'enseignant' ){
					$msgapprenants = $model->findMsgApprenantByEnseignant($user['id']);
					//debug ($msgapprenants);
					if(!empty($msgapprenants)){
						$id = $msgapprenants[0]['id_enseignant'];
						$user_id = $msgapprenants[0]['id'];
					}
				// 	debug($user);
				// 	$id = $user['id'];
				// 	$user_id =
				// }
				$msgenseignants = $model->findMsgEnseignantByApprenant($user['id']);

				if(in_array($user['role'], ['apprenant', 'enseignant'])){
//si enseignant renvoi la liste des messages de ses apprenants:
					  if(in_array($user['role'], ['enseignant'])){
							//debug($apprenants);
							$this->show('tutorat/tutorat', array(
								'msgapprenants' => $msgapprenants,
								'id'						=> $id,
								'user_id'				=> $user_id
							));
						}
//si apprenant renvoi liste des message de ses enseignants:
						if(in_array($user['role'], ['apprenant'])){
							$this->show('tutorat/tutorat', array(
								'msgenseignants' => $msgenseignants,
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
//methode affichant l'existance des enseignants ou des apprenants
	public function disponibilites($region_id){

				$users 	= new UsersModel();
				$apprenants = $users->findApprenantsInRegionById($region_id);

				$this->show('tutorat/disponibilites', array(
																								'apprenants'  => $apprenants
																							));

	}//fin methode disponibilites

	//methode pour associer enseignants et apprenants
	public function associer(){

	}//fin methode associer

}
