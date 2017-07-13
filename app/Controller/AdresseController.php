<?php

<<<<<<< HEAD
namespace Controller;

use \Controller\TiltController;

use \Model\UsersModel;
use \Model\CompetencesModel;

class AdresseController extends TiltController
{

	public function addAdresse()
	{
		$this->allowTo(['admin','apprenant','enseignant']);
		$this->show('users/adresse');
	}

	public function addAdresseAction() {

		$this->allowTo(['admin','apprenant','enseignant']);
		$errors = array();
		$clean      = new CleanTool();
		$validation = new ValidationTool();
		$auth       = new AuthentificationModel();
		$model      = new UsersModel();
		// debug($_POST);
			$post = $clean->cleanPost($_POST);
			$number = $post['number'];
			$street = $post['street'];
			$city = $post['city'];
			$postal = $post['postal'];

			$errors['number'] = $validation->textValid($number, 'numéro de rue', 3, 7);
			$errors['street'] = $validation->textValid($street, 'nom de rue', 3, 30);
			$errors['city'] = $validation->textValid($city, 'nom de ville', 3, 30);
			$errors['postal'] = $validation->textValid($postal, 'code postal', 3, 5);

			if($validation->IsValid($errors) == false){
				$this->show('users/profil', array(
					'errors'   => $errors,
				));

			} else {

				$data = array(
					'number' => $number,
					'street' => $street,
					'city' => $city,
					'postal' => $postal,
				);

				$model->insert($data);

			}

	}

}
=======
// namespace Controller;
//
// use \Controller\TiltController;
//
// use \Model\UsersModel;
// use \Model\CompetencesModel;
//
// class AdresseController extends TiltController
// {
//
// 	public function addAdress()
// 	{
// 		$loggedUser = $this->getUser();
// 		$this->show('Users/adresse');
// 	}
//
//
//
//
// 	public function addAdressAction() {
//
//
// 		$errors = array();
// 		$clean      = new CleanTool();
// 		$validation = new ValidationTool();
// 		$auth       = new AuthentificationModel();
// 		$model      = new AdressModel();
// 		// debug($_POST);
// 			$post = $clean->cleanPost($_POST);
// 			$number = $post['number'];
// 			$street = $post['street'];
// 			$city = $post['city'];
// 			$postal = $post['postal'];
//
// 			$errors['number'] = $validation->textValid($number, 'numéro de rue', 1, 7);
// 			$errors['street'] = $validation->textValid($street, 'nom de rue', 3, 30);
// 			$errors['city'] = $validation->textValid($city, 'nom de ville', 3, 30);
// 			$errors['postal'] = $validation->textValid($postal, 'code postal', 3, 5);
//
// 			if($validation->IsValid($errors) == false){
// 				$this->show('users/adresse', array(
// 					'errors'   => $errors,
// 				));
//
// 			} else {
//
// 				$data = array(
// 					'num_rue' => $number,
// 					'nom_voie' => $street,
// 					'ville'    => $city,
// 					'code_postal' => $postal,
// 				);
//
// 				$model->insert($data);
//
// 			}
//
// 	}
//
// }
>>>>>>> 3db56dcc60eaf456894bab7de9ff105bee92533b
