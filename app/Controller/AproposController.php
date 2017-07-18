<?php

namespace Controller;

use \Controller\TiltController;
use \Model\MessagesModel;
use \W\Security\AuthorizationModel;
use \Model\IntermModel;
use \Model\UsersModel;
use \Model\CompetencesModel;

class AproposController extends TiltController
{

	/**
	 * Page d'accueil par défaut
	 */
	public function apropos()
	{

		$nbcours = new IntermModel();
		$countcours = $nbcours-> countCours();

		$nbusers = new UsersModel();
		$countusers = $nbusers-> countUsers();

		$nbmessages = new MessagesModel();
		$countmessages = $nbmessages-> countMessages();

		$nbmatieres = new CompetencesModel();
		$countmatieres = $nbmatieres-> countMatieres();

		$this->show('default/apropos', array('countcours'=> $countcours, 'countusers'=>$countusers, 'countmessages'=>$countmessages, 'countmatieres'=>$countmatieres));
	}

}
