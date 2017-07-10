<?php

namespace Controller;

use \Controller\TiltController;
use \Model\RegionsModel;
use \Model\UsersModel;
use \Model\CompetencesModel;
use \Model\RegionsModel;

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

<<<<<<< HEAD
	

} // ferme la classe RegionsController
=======
	public function detailRegion($id) {
    $model = new RegionsModel();
    $region = $model->find($id);
    $this->show('regions/region',array(
      'region'   => $region
    ));
		debug($region);
  }



}
>>>>>>> 3a5492c09fa70e0ac9d0858d6b998454069c321d
