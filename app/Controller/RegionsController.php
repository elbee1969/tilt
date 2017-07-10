<?php

namespace Controller;

use \Controller\TiltController;

use \Model\UsersModel;
use \Model\CompetencesModel;
use \Model\RegionsModel;

class RegionsController extends TiltController
{

	/**
	 * Page d'accueil par défaut
	 */
	public function regions()
	{


		$this->show('regions/regions');
	}

	

} // ferme la classe RegionsController
