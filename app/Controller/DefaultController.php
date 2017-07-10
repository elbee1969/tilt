<?php

namespace Controller;

use \Controller\TiltController;

use \Model\UsersModel;
use \Model\CompetencesModel;

class DefaultController extends TiltController
{

	/**
	 * Page d'accueil par défaut
	 */
	public function home()
	{

		// // test de la méthode pour trouver les 5 derniers enseignants inscrits
		// $enseignants = new UsersModel();
		// $b = $enseignants->findFiveLastEnseignants();
		// // debug($b);
		//
		// // test de la méthode pour trouver les 5 derniers apprenants inscrits
		// $apprenants = new UsersModel();
		// $c = $apprenants->findFiveLastApprenants();
		// // debug($c);
		//
		// // test de la méthode pour trouver les utilisareurs en fonction d'une région
		// $users = new UsersModel();
		// $d = $users->findApprenantsInRegion('auvergne');
		// // debug($d);

		// test de la méthode pour les icones de la page d'accueil
		// $icon = new CompetencesModel();
		// $e = $icon->findCompetencesFromCategory('arts');
		// debug($e);

		$this->show('default/home');
	}

}
