<?php

namespace Controller;

use \Controller\TiltController;

use \Model\UsersModel;
use \Model\CompetencesModel;

class CommunauteController extends TiltController
{

	/**
	 * Page d'accueil par défaut
	 */
	public function Communaute()
	{


		$this->show('default/communaute');
	}

}
