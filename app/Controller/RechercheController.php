<?php

namespace Controller;

use \Controller\TiltController;

use \Model\UsersModel;
use \Model\CompetencesModel;

class RechercheController extends TiltController
{

	/**
	 * Page d'accueil par défaut
	 */
	public function recherche()
	{


		$this->show('default/recherche');
	}

}
