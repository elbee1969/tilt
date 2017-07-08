<?php

namespace Controller;

use \Controller\TiltController;

use \Model\UsersModel;
use \Model\CompetencesModel;

class AproposController extends TiltController
{

	/**
	 * Page d'accueil par défaut
	 */
	public function apropos()
	{


		$this->show('default/apropos');
	}

}
