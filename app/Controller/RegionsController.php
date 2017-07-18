<?php

namespace Controller;

use \Controller\TiltController;
use \Model\RegionsModel;
use \Model\UsersModel;
use \Model\CompetencesModel;
use \Model\AvatarModel;

class RegionsController extends TiltController
{

	/**
	 * Page d'accueil par défaut
	 */
	public function regions()
	{
		$model = new RegionsModel();
        $regions = $model->findAll();

		$this->show('regions/regions', array(
			'regions' => $regions
		));

	}





	public function detailRegion($id) {
    $model = new RegionsModel();
    $region = $model->find($id);

		//on va chercher les enseignants inscrits dans la région
		$enseignantInRegion = new UsersModel();
		$allEnseignantsInRegion = $enseignantInRegion->findEnseignantsinRegion($region['name']);

		//redéfinition de la variable $allEnseignantsInRegion si aucun enseignant n'est inscrit dans la région
		if(empty($allEnseignantsInRegion)) {
			$allEnseignantsInRegion = array();
			$allEnseignantsInRegion[0]['user_id'] = '';
		}

		//on va chercher les informations de l'avatar de l'utilisateur connecté
		$avatarFromId = new AvatarModel();
		$avatarFromIntermId = $avatarFromId->getAvatarFromIntermUserId($allEnseignantsInRegion[0]['user_id']);

		//on passe les données à la page région 
    $this->show('regions/region',array(
      'region'   => $region,
			'allEnseignantsInRegion' => $allEnseignantsInRegion,
			'avatarFromIntermId' => $avatarFromIntermId
    ));
		debug($region);
  }



}
