<?php

namespace Controller;

use \Controller\TiltController;
use \Model\RegionsModel;
use \Model\UsersModel;
use \Model\CompetencesModel;
use \Model\TutoratModel;
use \Model\IntermModel;
use \Service\Tools\CleanTool;
use \Service\Tools\ValidationTool;
use \W\Model\ConnectionModel;

class IntermController extends TiltController
{

	/**
	 * Page d'accueil par défaut
	 *///fonction recuperant les chexkboxs pour inscrire dans table Interm
	//*/// foreach via POST avec evitement de la value du submit
	//et verification pour ne pas faire de doublons

	public function participation($user_id,$region_id){

		$model 	= new IntermModel();
		$modelu = new UsersModel();
		$user = $this->getUser();
		//on verifie la présence d'enreg dans la table tilt_iterm
		$inscrits = $model->isInscript($user_id);

				//compter le nombre de ligne du post
				$a = count($_POST);
				$errors = array();
				// echo $user_id;
				// debug($_POST);
				//debug($user);
				// debug($inscrits);
				//die();
				//le post sera toujours égale à 1 car quand vide retourne la key btnsubmit
				//donc si < 1 alors vide
				if($a > 1){
					//on parcours le post pour recupérer les id des matières
					foreach ($_POST as $matiere => $value) {
						//on parcours la table tilt_interm des compétences et on vérifie pour éviter doublons
						foreach ($inscrits as $inscrit ) {
							if ($inscrit['competences_id'] == $value){
								//recupération des id matières existant déjà ---> à améliorer pour afficher leurs noms
								$errors[] .= $inscrit['competences_id'];
							}
						}
					}
					if (!empty($errors)){
						$errors = 'vous êtes déjà inscript à une ou des matière(s) selectionnée(s)';
						// quand sera améliorer on affichera le noms des matières
						$this->redirectToRoute('tutorat_cours', ['error' => $error]);
					}else{

						//test si apprenant ou enseignant
						if($user['role'] == 'apprenant'){
							//on fait un parcours du post pour enreg les matères dans bdd
							foreach ($_POST as $matiere => $value) {
								if($value !== 'Suivre des cours'){
									$model->insertInto($user_id,$region_id,$value);
								}
							}
						}else{

							foreach ($_POST as $matiere => $value) {
								if($value !== 'Donner des cours'){
									$model->insertInto($user_id,$region_id,$value);
								}
							}






						}



					}
				}else{

									$error = 'Vous n\'avez rien selectionné !';
									$this->redirectToRoute('tutorat_cours', array('error' => $error));
				}

		$this->redirectToRoute('tutorat_tutorat', array(
																					'region_id' => $region_id,
																					'user_id'		=> $user_id
																					));
	}

}// fin class CompetencesController
