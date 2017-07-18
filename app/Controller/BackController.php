<?php

namespace Controller;

use \Model\UsersModel;
use \Model\CompetencesModel;
use \Model\MessagesModel;
use \W\Security\AuthorizationModel;
use \Model\IntermModel;
use \Model\RegionsModel;

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

		$nbmatieres = new CompetencesModel();
		$countmatieres = $nbmatieres-> countMatieres();


	 $auth  = new AuthorizationModel();

		if(!$auth->isGranted('admin')) {	$this->redirectToRoute('default_home');}

		$this->show('back/home', array('countcours'=> $countcours, 'countusers'=>$countusers, 'countmessages'=>$countmessages, 'countmatieres'=>$countmatieres));
	}

	public function users()
	{
	 $auth  = new AuthorizationModel();
	 $regionNamefromId = new RegionsModel();
	 $user = $this->getUser();


		$regionName = $regionNamefromId->findRegionName($user['region_id']);

		$this->show('back/users', ['regionName' => $regionName]);
	}


	public function usersAction()
	{
		$userup = new UsersModel();
		$auth  = new AuthorizationModel();
		$regionNamefromId = new RegionsModel();
		$user = $this->getUser();
		$status = 0;

		if(!$auth->isGranted('admin')) {	$this->redirectToRoute('default_home');}

		$regionName = $regionNamefromId->findRegionName($user['region_id']);

		$data = array(
			'status' => $status,
		);

		$userup->update($data, $user['id']);

		$this->show('back/users', $data);
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
