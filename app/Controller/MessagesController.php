<?php

namespace Controller;

use \Controller\TiltController;
use \Service\Tools\CleanTool;
use \Service\Tools\ValidationTool;
use \Model\UsersModel;
use \Model\MessagesModel;

class MessagesController extends TiltController
{

	/**
	 * Page d'accueil par défaut
	 */
	public function messages()
	{
		$modelmsg 	= new MessagesModel();
		$modeluser 	= new UsersModel();

				$messages = $modelmsg->findAll();
				$messagesapp = $modelmsg->findMessage();

				if(!empty($messages)){

					$this->show('messages/messages', array(
						'messages' => $messages
					));
				}else{

					$this->show('messages/messages',array(
						'messagesapp' => $messagesapp
					));
				}

	}

	/**
	 * [messagesAction description]
	 * @return [type] [description]
	 */
	public function messagesAdd()
	{
		$user 			= new UsersModel();
		$message 		= new MessagesModel();
		$clean   		= new CleanTool();
		$validation = new ValidationTool();
		$post       = $clean->cleanPost($_POST);
			$pseudo    = $post['message'];
			$errors['message'] = $validation->textValid($message,'message',2,1000);
			if($validation->IsValid($errors) == false){
				$this->show('messages/messages', array(
					'errors'   => $errors
				));
			} else {
				  $data = array(
						'message' => $message,
						);

            $message->insert($data);

			}
		}




}
