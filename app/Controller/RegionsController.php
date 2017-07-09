<?php

namespace Controller;

use \Controller\TiltController;

use \Model\UsersModel;
use \Model\CompetencesModel;

class RegionsController extends TiltController
{

	/**
	 * Page d'accueil par défaut
	 */
	public function regions()
	{


		$this->show('regions/regions');
	}

}
