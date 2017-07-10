<?php

namespace Controller;

use \Controller\TiltController;

use \Model\UsersModel;
use \Model\CompetencesModel;
use \Model\RegionsModel;

class DefaultController extends TiltController
{

	/**
	 * Page d'accueil par défaut
	 */
	public function home()
	{

		// test de la méthode pour trouver les 5 derniers enseignants inscrits
		// $enseignants = new UsersModel();
		// $b = $enseignants->findFiveLastEnseignants();
		// debug($b);

		// test de la méthode pour trouver les 5 derniers apprenants inscrits
		// $apprenants = new UsersModel();
		// $c = $apprenants->findFiveLastApprenants();
		// debug($c);

		// test de la méthode pour les icones de la page d'accueil
		// $icon = new CompetencesModel();
		// $e = $icon->findCompetencesFromCategory('arts');
		// debug($e);

		//test de la méthode pour alimenter la liste déroulante des régions
		// $regions = new RegionsModel();
		// $f = $regions->findAllRegions();
		// debug($f);

		//test de la méthode pour trouver les apprenants dans une région donnée
		// avec leurs compétences
		// $apprenants = new UsersModel();
		// $g = $apprenants->findApprenantsInRegion('normandie');
		// debug($g);

		//test de la méthode pour trouver les enseignants dans uen région donnée
		// avec leurs compétences
		// $enseignants = new UsersModel();
		// $h = $enseignants->findEnseignantsinRegion('ile-de-france');
		// debug($h);

		$this->show('default/home');
	}

}
