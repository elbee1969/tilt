<?php

namespace Controller;

use \Model\UsersModel;
use \Model\CompetencesModel;
use \Model\MessagesModel;
use \W\Security\AuthorizationModel;
use \Model\IntermModel;

class BackController extends TiltController
{

	/**
	 * Page d'accueil par défaut
	 */
	public function home()
	{

		$nbcours = new IntermModel();
		$countcours = $nbcours-> countCours();

		$nbusers = new UsersModel();
		$countusers = $nbusers-> countUsers();

		$nbmessages = new MessagesModel();
		$countmessages = $nbmessages-> countMessages();


	 $auth  = new AuthorizationModel();

		if(!$auth->isGranted('admin')) {	$this->redirectToRoute('default_home');}

		$this->show('back/home', array('countcours'=> $countcours, 'countusers'=>$countusers, 'countmessages'=>$countmessages));
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
