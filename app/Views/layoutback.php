<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title><?= $this->e($title) ?></title>
	<link rel="stylesheet" href="<?= $this->assetUrl('css/font-awesome.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/normalize.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/animate.css') ?> ">
	<link rel="stylesheet" href="<?= $this->assetUrl('cssback/style.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/bootstrap.css') ?>">
	<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
	<link rel="icon" type="image/png" href="<?= $this->assetUrl('img/favicon.png')?>" />

</head>
<body>
	<header>
		<nav class="navbar navbar-toggleable-md navbar-inverse fixed-top" style="background-color:#9fa8da">
		  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <a class="navbar-brand" href="<?= $this->url('back_home'); ?>"><p id="logo_navbar">Tilt</p>
			<p class="slogan">Backoffice de Tilt !</p></a>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">

				<li>
					<a class="nav-link" href="<?= $this->url('back_users'); ?>">Utilisateurs</a>
				</li>
				<li>
					<a class="nav-link" href="<?= $this->url('back_cours'); ?>">Cours</a>
				</li>
				<li>
					<a class="nav-link" href="https://mail.google.com/mail/u/2/#inbox" target="_blank">Messages</a>
				</li>
				<li>
					<a class="nav-link" href="<?= $this->url('back_ameliorations'); ?>">Améliorations</a>
				</li>
			</ul>
				<li >
					<a class="nav-link backfront" href="<?= $this->url('default_home'); ?>">Frontoffice</a>
				</li>


		  </div>
		</nav>
	</header>



		<section class="backgroundsection">
			<?= $this->section('main_content') ?>
		</section>










	<script src="<?= $this->assetUrl('js/jquery-3.2.1.js')?>" charset="utf-8"></script>
	<script type="text/javascript" src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
	<script src="<?= $this->assetUrl('js/bootstrap.js')?>" charset="utf-8"></script>

</body>
</html>
