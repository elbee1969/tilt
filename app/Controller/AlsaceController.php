<?php

namespace Controller;

use \W\Controller\Controller;

class AlsaceController extends Controller {

  public function findAlsaceTrainings() {

    $trainings = new AlsaceFormationsModel();

    $alsacetrainings = $trainings->findAll();

    $this->show('default/home', ['alsace' => $alsacetrainings]);

  }

}
