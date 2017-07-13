<?php
// 
// namespace Controller;
//
// use \Controller\TiltController;
// use \Model\UsersModel;
// use \Model\CompetencesModel;
// use \Service\Tools\CleanTool;
// use \Service\Tools\ValidationTool;
//
// class AdresseController extends TiltController
// {
//
//
//         public function adresse()
//         {
//         	$loggedUser = $this->getUser();
//         	//debug($loggedUser);
//         }
//
//
//         public function addAdress()
//       	{
//       		$loggedUser = $this->getUser();
//       		$this->show('Users/adresse');
//       	}
//
//
//
//
//         public function addAdressAction() {
//
//
//           $errors = array();
//           $clean      = new CleanTool();
//           $validation = new ValidationTool();
//           $auth       = new AuthentificationModel();
//           $add        = new AdresseModel();
//           // debug($_POST);
//             $post = $clean->cleanPost($_POST);
//             $number = $post['number'];
//             $street = $post['street'];
//             $city = $post['city'];
//             $postal = $post['postal'];
//
//             $errors['number'] = $validation->textValid($number, 'numéro de rue', 1, 7);
//             $errors['street'] = $validation->textValid($street, 'nom de rue', 3, 30);
//             $errors['city'] = $validation->textValid($city, 'nom de ville', 3, 30);
//             $errors['postal'] = $validation->textValid($postal, 'code postal', 3, 5);
//
//             if($validation->IsValid($errors) == false){
//               $this->show('users/adresse', array(
//                 'errors'   => $errors,
//               ));
//
//             } else {
//
//               $data = array(
//                 'num_rue' => $number,
//                 'nom_voie' => $street,
//                 'ville'    => $city,
//                 'code_postal' => $postal,
//               );
//
//               $add->insert($data);
//
//             }
//
//         }
//
// }
