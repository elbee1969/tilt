<?php

	$w_routes = array(
		['GET', '/', 'Default#home', 'default_home'],

		['GET', '/concept', 'Concept#concept', 'default_concept'],
		['GET', '/matieres', 'Matieres#matieres', 'default_matieres'],

		['GET', '/apropos', 'Apropos#apropos', 'default_apropos'],

		['GET', '/contact', 'Contact#contact', 'default_contact'],
		['POST', '/contact', 'Contact#contactAction', 'default_contact_action'],

		['GET', '/tutorat', 'Tutorat#tutorat', 'tutorat_tutorat'],


		['GET', '/messages/[i:id]/[i:user_id]', 'Messages#messages', 'messages_messages'],
		['GET|POST', '/messages/[i:id]/[i:user_id]', 'Messages#messagesAdd', 'messages_messages_action'],

		['GET', '/profil', 'Users#profil', 'users_profil'],

		['GET', '/profil/adresse', 'Users#addAdress', 'users_adresse'],
		['POST', '/profil/adresse', 'Users#addAdressAction', 'users_adresse_action'],

		['GET', '/profil/avatar', 'Avatar#addAvatar', 'users_avatar'],
		['POST', '/profil/avatar', 'Avatar#addAvatarAction', 'users_avatar_action'],


		['GET', '/regions', 'Regions#regions', 'regions_regions'],
		['GET', '/region[:id]', 'Regions#detailRegion', 'regions_region'],

		['GET','/passwordforget', 'Users#passwordForget', 'passwordforget'],
		['POST','/passwordforget', 'Users#passwordForgetAction', 'passwordforget_action'],

		['GET','/newpassword', 'Users#newPassword', 'newpassword'],
		['POST','/newpassword', 'Users#newPasswordAction', 'newpassword_action'],

		['GET', '/inscription', 'Users#register', 'users_register'],
		['POST', '/inscription', 'Users#registerAction', 'users_register_action'],

		['GET', '/login', 'Users#login', 'login'],
		['POST', '/login', 'Users#loginAction', 'login_action'],



		['GET|POST', '/logout', 'Users#logout', 'logout'],

		['GET', '/backoffice', 'Back#home', 'back_home'],
		['GET', '/backoffice/utilisateurs', 'back#users', 'back_users'],
		['GET', '/backoffice/support', 'back#support', 'back_support'],
		['GET', '/backoffice/cours', 'back#cours', 'back_cours'],
		['GET', '/backoffice/messages', 'back#messages', 'back_messages'],
		['GET', '/backoffice/ameliorations', 'back#ameliorations', 'back_ameliorations'],

		['GET', '/inscrapprenant', 'Users#inscrapprenant', 'users_inscrapprenant'],

		['GET', '/inscrenseignant', 'Users#inscrenseignant', 'users_inscrenseignant'],
	);
