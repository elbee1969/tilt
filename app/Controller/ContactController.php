<?php

namespace Controller;

use \Controller\TiltController;

use \Model\UsersModel;
use \Model\CompetencesModel;

class ContactController extends TiltController
{

	/**
	 * Page d'accueil par défaut
	 */
	public function contact()
	{


		$this->show('default/contact');
	}

}
