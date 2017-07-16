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

class CompetencesController extends TiltController
{

	/**
	 * Page d'accueil par défaut
	 */
	public function cours(){

	 $model = new CompetencesModel();
       $cours = $model->findAll();
			 $cat =  ['arts','chimie','cuisine','economie','francais','geographie',
			 				 'histoire','langues','mathematiques','musique','nouvellestechnologies','sport'];
			 $t = count($cat);
				 for ($i=0; $i < $t ; $i++) {
					 $categories[] = $model->findCompetencesFromCategory($cat[$i]);
				 }
	 			$this->show('tutorat/cours', array(
																					'cours' 			=> $cours,
																					'categories'	=> $categories,
																					'cat'					=> $cat
																					));
 	}//fin methode cours

	public function participation($id,$user_id){

		debug($_POST);
		echo $id;
		echo $user_id;
		foreach ($_POST as $key ) {
			if($key !== 'Inscription'){
				echo $key;
			}
		}
				$model 	= new IntermModel();
				$user 			= new UsersModel();
				$clean   		= new CleanTool();
				$post  = $clean->cleanPost($_POST);
				//die();

				$sql = "INSERT INTO tilt_interm ( user_id, regions_id, competences_id )
								VALUES (:id, :region_id, :competence_id)";
								$sth = $model->dbh->prepare($sql);
								$sth->bindValue(':id', $id);
								$sth->bindValue(':region_id', $region_id);
								$sth->bindValue(':competence_id', 5);
								$sth->execute();

	}


}// fin class CompetencesController
