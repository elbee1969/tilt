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

	//fonction recuperant les checkboxs pour inscrire dans table Interm
	// foreach via POST avec evitement de la value du submit
	//et verification pour ne pas faire de doublons

	public function participation($user_id,$region_id){

		$model 	= new IntermModel();
		$modelu = new UsersModel();
		//on verifie la présence d'enreg dans la table tilt_iterm
		$inscrits = $model->isInscript($user_id);
		//debug($inscrits); //renvoie un array associatif avec toutes les lignes de la table interm où l'utilisateur apparaît
		//debug($_POST); //renvoie un array avec en clé le nom de la matière qui a été cochée et en valeur la competences_id

		//compter le nombre de ligne du post
		$countPost = count($_POST);

		$errors = array();

		//$_POST aura toujours au minimum un couple clé/valeur: [btnsubmit] => Suivre ces cours
		//donc si =< 1 c'est qu'aucune checkbox n'a été cochée
		if($countPost > 1){
					//on parcourt le post pour recupérer les id des matières
					foreach ($_POST as $matiere => $value) {
						//on parcourt la table tilt_interm et on vérifie pour éviter les doublons
						foreach ($inscrits as $inscrit ) {
							if ($inscrit['competences_id'] == $value){
								//recupération des id matières existant déjà ---> à améliorer pour afficher leurs noms
								$errors[] .= $inscrit['competences_id'];
							}
						}
					}

					if (!empty($errors)){
						//message d'erreur à afficher quand une checkbox cochée fait déjà partie des matières dans lesquelles le user est inscrit
						$error = 'vous êtes déjà inscrit à une ou des matière(s) selectionnée(s)';
						//sera à améliorer pour afficher de façon détaillée le noms des matières

						//récupération des catégories pour afichage de la page cours
						$model = new CompetencesModel();
						$cours = $model->findAll();
						$cat =  ['arts','chimie','cuisine','economie','francais','geographie',
											 'histoire','langues','mathematiques','musique','nouvellestechnologies','sport'];
						$t = count($cat);
							for ($i=0; $i < $t ; $i++) {
									 $categories[] = $model->findCompetencesFromCategory($cat[$i]);
							 }


						$this->show('tutorat/cours', array(
																								'error'       => $error,
																								'cours' 			=> $cours,
																								'categories'	=> $categories,
																								'cat'					=> $cat));

						} else {
						//on fait un parcours du post pour enreg les matères dans bdd
						foreach ($_POST as $matiere => $value) {
							if($value !== 'Suivre ces cours'){
								$model->insertInto($user_id,$region_id,$value);
							}
						}
					}


				} else {
									//message d'erreur à afficher quand aucune checkbox n'a été cochée
									$error = 'Vous n\'avez rien selectionné !';

									//récupération des catégories pour afichage de la page cours
									$model = new CompetencesModel();
							    $cours = $model->findAll();
							 		$cat =  ['arts','chimie','cuisine','economie','francais','geographie',
							 			 				 'histoire','langues','mathematiques','musique','nouvellestechnologies','sport'];
							 		$t = count($cat);
							 			for ($i=0; $i < $t ; $i++) {
							 					 $categories[] = $model->findCompetencesFromCategory($cat[$i]);
							 			 }

									$this->show('tutorat/cours', array(
																											'error'       => $error,
																											'cours' 			=> $cours,
																											'categories'	=> $categories,
																											'cat'					=> $cat));
					}

		$this->redirectToRoute('tutorat_tutorat', array(
																					'region_id' => $region_id,
																					'user_id'		=> $user_id
																					));
	}

}// fin class CompetencesController
