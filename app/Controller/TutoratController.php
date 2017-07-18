<?php

namespace Controller;

use \Controller\TiltController;
use \Service\Tools\CleanTool;
use \Service\Tools\ValidationTool;
use \Model\UsersModel;
use \Model\TutoratModel;
use \Model\RegionsModel;
use \Model\CompetencesModel;
use W\Security\AuthentificationModel;

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
							//debug($inscrits);
							$this->show('tutorat/tutorat', array(
								'msgapprenants' => $msgapprenants//,
								// 'user'			 =>	$user,
								// 'region'     => $region
							));
						}
//si apprenant renvoi liste des message de ses enseignants:
						if(in_array($user['role'], ['apprenant'])){
							$this->show('tutorat/tutorat', array(
								'msgenseignants' => $msgenseignants//,
								// 'user'			 =>	$user,
								// 'region'     => $region
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
	public function disponibilites($region_id,$role){
				$users 	= new UsersModel();
				if($role == 'enseignant'){
					$inscrits = $users->findApprenantsInRegionById($region_id);
				}else{
					$inscrits = $users->findEnseignantsInRegionById($region_id);
				}

				$this->show('tutorat/disponibilites', array(
																								'inscrits'  => $inscrits
																							));

	}//fin methode disponibilites




	//methode pour associer enseignants et apprenants dans table tilt_tutorat
	public function bindUsers($id_competences,$id_region,$id_connect,$id_distant,$role_connect){
		$model = new TutoratModel();
		$exist = new TutoratModel();
		//verifier si un cours existe déjà dans la table tilt_tutorat
		$coursExist = $exist->isBind($id_competences,$id_region,$id_connect,$id_distant);
//$a = count($coursExist);
echo '$coursExist : '.$coursExist['id_competence'];
		var_dump($coursExist);
		echo '<br>';
		echo '$id_competences : '.$id_competences;
		echo '<br>';
		echo '$id_region : '.$id_region;
		echo '<br>';
		echo '$id_connect : '.$id_connect;
		echo '<br>';
		echo '$id_distant : '.$id_distant;
		echo '<br>';
		die();

	if ($a == 1){

	}
		//enregistrement d'un cours dans la table titl_tutorat
			if ($role_connect == 'enseignant'){

						$data = array(
							'id_competence'  => $id_competences,
							'id_region'      => $id_region,
							'id_enseignant'  => $id_connect,
							'id_apprenant'   => $id_distant
						);

			}else{


					$data = array(
						'id_competence'  => $id_competences,
						'id_region'      => $id_region,
						'id_enseignant'  => $id_distant,
						'id_apprenant'   => $id_connect
					);


			}
 		$model->insert($data);
		$this->redirectToRoute('tutorat_tutorat');
	}//fin methode bindUsers




























}//fin class TutoratController
