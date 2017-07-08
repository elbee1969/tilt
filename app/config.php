<?php

$w_config = [
   	//information de connexion à la bdd
	'db_host' => 'localhost',						//hôte (ip, domaine) de la bdd
    'db_user' => 'root',							//nom d'utilisateur pour la bdd
    'db_pass' => '',								//mot de passe de la bdd
    'db_name' => 'tilt',								//nom de la bdd
    'db_table_prefix' => 'tilt_',						//préfixe ajouté aux noms de table

	//authentification, autorisation
	'security_user_table' => 'tilt_user',				//nom de la table contenant les infos des utilisateurs
	'security_id_property' => 'id',					//nom de la colonne pour la clef primaire
	'security_username_property' => 'pseudo',		//nom de la colonne pour le "pseudo"
	'security_email_property' => 'email',			//nom de la colonne pour l'"email"
	'security_password_property' => 'password',		//nom de la colonne pour le "mot de passe"
	'security_role_property' => 'role',				//nom de la colonne pour le "role"
  'security_first_property' => 'first_name', //nom de la colonne pour le "prénom"
  'security_last_property' => 'last_name', //nom de la colonne pour le "nom"


	'security_login_route_name' => 'login',			//nom de la route affichant le formulaire de connexion

	// configuration globale
	'site_name'	=> 'TILT', 								// contiendra le nom du site
];

require('routes.php');
