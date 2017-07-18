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




}// fin class CompetencesController
