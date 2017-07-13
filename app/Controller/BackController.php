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

	public function users()
	{
	 $auth  = new AuthorizationModel();

		if(!$auth->isGranted('admin')) {	$this->redirectToRoute('default_home');}

		$this->show('back/users');
	}


	public function cours()
	{
	 $auth  = new AuthorizationModel();

		if(!$auth->isGranted('admin')) {	$this->redirectToRoute('default_home');}

		$this->show('back/cours');
	}


	public function support()
	{
	 $auth  = new AuthorizationModel();

		if(!$auth->isGranted('admin')) {	$this->redirectToRoute('default_home');}

		$this->show('back/support');
	}


	public function messages()
	{
	 $auth  = new AuthorizationModel();

		if(!$auth->isGranted('admin')) {	$this->redirectToRoute('default_home');}

		$this->show('back/messages');
	}

	public function ameliorations()
	{
	 $auth  = new AuthorizationModel();

		if(!$auth->isGranted('admin')) {	$this->redirectToRoute('default_home');}

		$this->show('back/ameliorations');
	}



}
