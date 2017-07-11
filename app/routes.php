<?php

	$w_routes = array(
		['GET', '/', 'Default#home', 'default_home'],

		['GET', '/concept', 'Concept#concept', 'default_concept'],
		['GET', '/communaute', 'Communaute#communaute', 'default_communaute'],
		['GET', '/matieres', 'Matieres#matieres', 'default_matieres'],

		['GET', '/apropos', 'Apropos#apropos', 'default_apropos'],

		['GET', '/contact', 'Contact#contact', 'default_contact'],
		['POST', '/contact', 'Contact#contactAction', 'default_contact_action'],

		['GET', '/tutorat', 'Tutorat#tutorat', 'tutorat_tutorat'],
	

		['GET', '/messages', 'Messages#messages', 'messages_messages'],
		['POST', '/messages', 'Messages#messagesAdd', 'messages_messages_action'],

		['GET', '/profil', 'Users#profil', 'users_profil'],

		['POST', '/profil', 'Users#addAdressAction', 'users_profil_action'],

		['GET', '/avatar', 'Users#addAvatar', 'users_avatar'],
		['POST', '/avatar', 'Users#addAvatarAction', 'users_avatar_action'],


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

		['GET|POST', '/backOffice', 'Back#home', 'back_home'],

	);
