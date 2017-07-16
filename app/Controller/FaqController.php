<?php

namespace Controller;

use \Controller\TiltController;

use \Model\UsersModel;
use \Model\CompetencesModel;

class FaqController extends TiltController
{

	/**
	 * Page d'accueil par défaut
	 */
	public function faq()
	{


		$this->show('default/faq');
	}

}
