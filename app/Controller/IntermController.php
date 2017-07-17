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
	//*/// foreach via POST avec evitezment de la value du submit

	public function participation($user_id,$region_id){

		$model 	= new IntermModel();
		$modelu = new UsersModel();
		// $user 			= new UsersModel();
		// $clean   		= new CleanTool();
		// $post  = $clean->cleanPost($_POST);

		// debug($_POST);
		// echo $user_id;
		// echo '<br>'.$region_id;
		// die();
		//
		$inscrits = $model->isInscript();
				// debug($_POST);
				// die();
				foreach ($_POST as $competences_id ) {
					if($inscrits){
						foreach ($inscrits as $inscrit) {
							if ($inscrit['competences_id'] == $competences_id[1]){
								echo 'vous êtes déjà inscript à une ou des matière(s) selectionnée(s)';
							die();
							}

						}

					}else{

						if($competences_id !== 'Suivre ces cours'){
							//echo $key;
							$model->insertInto($user_id,$region_id,$competences_id);
						}
					}
				}



		$this->redirectToRoute('tutorat_tutorat', array(
																					'region_id' => $region_id,
																					'user_id'		=> $user_id
																					));
	}
}// fin class CompetencesController
