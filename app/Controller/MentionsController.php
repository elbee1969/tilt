<?php

namespace Controller;

use \Controller\TiltController;

use \Model\UsersModel;
use \Model\CompetencesModel;

class MentionsController extends TiltController
{

	/**
	 * Page d'accueil par défaut
	 */
	public function mentions()
	{


		$this->show('default/mentions');
	}

}
