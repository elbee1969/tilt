<?php

namespace Controller;



use \Model\UsersModel;
use \Model\CompetencesModel;
use \W\Security\AuthorizationModel;

class BackController extends TiltController
{

	/**
	 * Page d'accueil par défaut
	 */
	public function home()
	{
	 $auth  = new AuthorizationModel();

		if(!$auth->isGranted('admin')) {	$this->redirectToRoute('default_home');}

		$this->show('back/home');
	}

}
