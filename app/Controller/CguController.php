<?php

namespace Controller;

use \Controller\TiltController;

use \Model\UsersModel;
use \Model\CompetencesModel;

class CguController extends TiltController
{

	/**
	 * Page d'accueil par défaut
	 */
	public function cgu()
	{


		$this->show('default/cgu');
	}

}
