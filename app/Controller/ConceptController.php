<?php

namespace Controller;

use \Controller\TiltController;

use \Model\UsersModel;
use \Model\CompetencesModel;

class ConceptController extends TiltController
{

	/**
	 * Page d'accueil par défaut
	 */
	public function concept()
	{


		$this->show('default/concept');
	}

}
