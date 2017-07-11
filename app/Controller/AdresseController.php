<?php

namespace Controller;

use \Controller\TiltController;

use \Model\UsersModel;
use \Model\CompetencesModel;

class AdresseController extends TiltController
{

	/**
	 * Page d'accueil par défaut
	 */
	public function Adresse()
	{

		$loggedUser = $this->getUser();
		$this->show('default/adresse');
	}

}
