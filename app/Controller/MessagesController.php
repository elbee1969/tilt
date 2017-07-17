<?php

namespace Controller;

use \Controller\TiltController;
use \Service\Tools\CleanTool;
use \Service\Tools\ValidationTool;
use \Model\UsersModel;
use \Model\MessagesModel;
use \W\Security\AuthentificationModel;

class MessagesController extends TiltController
{




	/**
	 * Page d'accueil par défaut
	 */
	public function messages($id,$user_id)
	{
		$modelmsg 	= new MessagesModel();
		$modeluser 	= new UsersModel();
		//recupération des infos $user_id passé en POST
		$user = $modeluser->find($user_id);
		// récupération du prénom pour le passer et l'afficher dans la page message
		$prenom = $user['pseudo'];

				$messages = $modelmsg->findMessageFrom($id,$user_id);

				$selfmessages = $modelmsg->findMessageTo($id,$user_id);

					$this->show('messages/messages', array(
						'messages' 			=> $messages,
						'selfmessages' 	=> $selfmessages,
						'prenom'  			=> $prenom,
						'id'						=> $id,
						'user_id'				=> $user_id
					));


		}


			/**
			* Page d'accueil par défaut
			*/
	public function message($id,$user_id)
	{
		$this->show('messages/message', ['id'	=> $id , 'user_id' => $user_id]);
	}
	/**
	 * [messagesAction description]
	 * @return [type] [description]
	 */
	public function messageAdd($id,$user_id)
	{

		$errors = array();$success = false;
		$user 					= new UsersModel();
		$newmessage 		= new MessagesModel();
		$clean   				= new CleanTool();
		$validation 		= new ValidationTool();
		$auth        		= new AuthentificationModel();
		$post      	 = $clean->cleanPost($_POST);
				$message = $post['message'];
				$errors['message'] = $validation->textValid($message,'message',2,500);
				if($validation->IsValid($errors)) {

					// si pas d'error  insert
						$datenow = new \DateTime;
					  $data = array(
							'id_recepteur' 	=> $user_id,
							'id_emetteur' 	=> $id,
							'message'				=> $message,
							'created_at'  	=> $datenow->format('Y-m-d H:i:s'),
							'status_e'      => 1,
							'status_r'      => 1
							);

	            $newmessage->insert($data);
							$success = true;
							
				}
				$data = array(
							'errors'   => $errors,
							'success'  => $success
				);
				$this->showJson($data);


	}// fin messageAdd



			/**
			 *  fonction qui supprime(soft delete) les messages echangés entre les apprenants et les enseignants
			 *  diférenciation entre le même message vu chez l'un ou l'autre :
			 *  exemple : un enseignant peu supprimer un message de l'apprenant et celui-ci sera toujours visible
			 *  chez l'apprenant jusqu'a ce que lui même ne l'afface
			 */
		 public function messageSup($id,$status,$ori,$id_e,$id_r)
		 {
			 $model  = new MessagesModel();
				echo $id.'<br>';
				echo $status.'<br>';
				echo $ori.'<br>';
				echo $id_e.'<br>';
				echo $id_r.'<br>';
				//die();
				if ($ori == $id_e){
					$data = array(
						'status_r' 		=> $tatus
					);
					$model->update($data,$id);
					$this->redirectToRoute('messages_messages', ['id' => $id_e, 'user_id' => $id_r]);
				}else{
					$data = array(
						//'status_e' 		=> $s_e,
						'status_e' 		=> $tatus
					);
					$model->update($data,$id);
					$this->redirectToRoute('messages_messages', ['id' => $id_r, 'user_id' => $id_e]);
				}
			}//fin messageSup

























}
