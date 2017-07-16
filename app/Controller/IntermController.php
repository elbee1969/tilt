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
	 */

	public function participation($user_id,$region_id){

		$model 	= new IntermModel();
		$user 			= new UsersModel();
		$clean   		= new CleanTool();
		$post  = $clean->cleanPost($_POST);

		//debug($_POST);
				foreach ($_POST as $competences_id ) {
					if($competences_id !== 'Inscription'){
						//echo $key;
						$model->insertInto($user_id,$region_id,$competences_id);
					}
				}


		$this->show('tutorat/disponibilites');
	}


}// fin class CompetencesController
