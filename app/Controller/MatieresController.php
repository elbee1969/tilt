<?php

namespace Controller;

use \Controller\TiltController;

use \Model\UsersModel;
use \Model\CompetencesModel;

class MatieresController extends TiltController
{

	/**
	 * Page d'accueil par défaut
	 */
	public function matieres()
	{


		$this->show('default/matieres');
	}

}
