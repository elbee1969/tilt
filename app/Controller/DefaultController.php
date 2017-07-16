<?php

namespace Controller;

use \Controller\TiltController;

use \Model\UsersModel;
use \Model\CompetencesModel;
use \Model\RegionsModel;
use \Model\AvatarModel;

class DefaultController extends TiltController
{

	/**
	 * Page d'accueil par défaut
	 */
	public function home()
	{

		$this->show('default/home');
	}

}
