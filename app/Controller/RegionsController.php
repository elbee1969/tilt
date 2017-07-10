<?php

namespace Controller;

use \Controller\TiltController;
use \Model\RegionsModel;
use \Model\UsersModel;
use \Model\CompetencesModel;

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
    $this->show('regions/region',array(
      'region'   => $region
    ));
		debug($region);
  }



}
