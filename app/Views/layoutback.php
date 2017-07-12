<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title><?= $this->e($title) ?></title>
	<link rel="stylesheet" href="<?= $this->assetUrl('cssback/font-awesome.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('cssback/normalize.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('cssback/animate.css') ?> ">
	<link rel="stylesheet" href="<?= $this->assetUrl('cssback/style.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('cssback/bootstrap.css') ?>">
	<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
	<link rel="icon" type="image/png" href="<?= $this->assetUrl('img/favicon.png')?>" />

</head>
<body>
	<header>
		<nav class="navbar navbar-toggleable-md navbar-inverse fixed-top" style="background-color:#3f51b5">
		  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <a class="navbar-brand" href="<?= $this->url('default_home'); ?>"><p id="logo_navbar">Tilt</p>
			<p class="slogan">Backoffice de Tilt !</p></a>
			<ul class="navbar-nav mr-auto">
				<a class="nav-link" href="<?= $this->url('default_home'); ?>">Revenir au site</a>
			</ul>


		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		  </div>
		</nav>
	</header>
		<section class="backgroundsection">
			<?= $this->section('main_content') ?>
		</section>










	<script src="<?= $this->assetUrl('jsback/jquery-3.2.1.js')?>" charset="utf-8"></script>
	<script type="text/javascript" src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
	<script src="<?= $this->assetUrl('jsback/bootstrap.js')?>" charset="utf-8"></script>
	<?= $this->section('js') ?> <!-- Appel de la section js qui est situé dans home.php - Cela va récupérer les JS de la map  !-->

</body>
</html>
