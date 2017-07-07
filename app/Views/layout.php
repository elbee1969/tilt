<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title><?= $this->e($title) ?></title>
	<link rel="stylesheet" href="<?= $this->assetUrl('css/font-awesome.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/normalize.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/animate.css') ?> ">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/style.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/bootstrap.css') ?>">
	<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
	<link rel="icon" type="image/png" href="./assets/img/favicon.png" />


</head>
<body>
	<header>
		<nav class="navbar navbar-toggleable-md navbar-inverse fixed-top" style="background-color:#3f51b5">
		  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <a class="navbar-brand" href="#"><p id="logo_navbar">Tilt</p>
			<p class="slogan">Teach it learn that !</p></a>
		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		      <li>
						<a class="nav-link" href="http://www.tilt.fr">Concept</a>
		      </li>
					<li>
						<a class="nav-link" href="http://www.tilt.fr">Communauté</a>
					</li>
					<li>
						<a class="nav-link" href="http://www.tilt.fr">Matières</a>
					</li>
					<li>
						<a class="nav-link" href="http://www.tilt.fr">A propos</a>
					</li>
					<li>
						<a class="nav-link" href="http://www.tilt.fr">Contact</a>
					</li>
		    </ul>
		    <form class="form-inline my-2 my-lg-0">
		        <a class="nav-link" href="#">Inscription / Connexion</a>
		      <input class="form-control mr-sm-2" type="text" placeholder="Compétences, régions ..."><button class="btn btn-outline-success my-2 my-sm-0 fa fa-search" aria-hidden="true" type="submit"></button></input>

		    </form>
		  </div>
		</nav>
	</header>
		<section class="backgroundsection">
			<?= $this->section('main_content') ?>
		</section>

		<footer>
<div class="container-fluid">
	<div class="row">
		<div class="col-2 hidden-xs-down hidden-sm-down"><!-- Collone vide !--></div>
		<div class="col-md-3 col-12">
			<div class="row">
			<div class="col-md-12">
				<p id="logo_footer">Tilt</p>
			</div>
		</div>
			<div class="row">
				<div class="col-md-7 col-6">
					<ul>
						<li>Mentions légales</li>
						<li>Contact</li>
						<li>CGU</li>
						<li>FAQ</li>
				</div>
				<div class="col-md-5 col-6 ">
					<li>Top enseignants</li>
					<li>Top apprenants</li>
					<li>Top matières</li>
					<li>Top régions actives</li>
				</ul>
				</div>
			</div>
		</div>
		<div class="col-md-2 col-12">
<div class="container-fluid">
			<div class="row">
			<div class="col-12 align-self-start">
				<p class="copyright" id="logo_footer">Rejoignez-nous</p>
				<p class="copyright">
					<a target="_blank" href="https://search.itunes.apple.com/WebObjects/MZContentLink.woa/wa/link?mt=8&path=appstore"><i class="fa fa-facebook fa-3x" aria-hidden="true"></i></a>
					<a target="_blank" href="https://search.itunes.apple.com/WebObjects/MZContentLink.woa/wa/link?mt=8&path=appstore"><i class="fa fa-twitter fa-3x" aria-hidden="true"></i></a>
				</p>
			</div>
			</div>
			<div class="row align-items-end">
			<div class="col-12 align-self-end">
				<p class="copyright" id="copyright"> © 2017 Tilt | Webforce3 </p>
			</div>
			</div>
		</div>
	</div>
		<div class="col-md-2 col-12 align-self-center">
<p class="copyright"><a target="_blank" href="https://search.itunes.apple.com/WebObjects/MZContentLink.woa/wa/link?mt=8&path=appstore"><img id="appstore" src="./assets/img/download-appstore.png" alt=""></a> <a target="_blank" href="https://play.google.com/store?hl=fr"><img id="googleplay" src="./assets/img/download-googleplay.png" alt=""></a></p>
		</div>
		<div class="col-md-2 col-12 align-self-end hidden-xs-down hidden-sm-down">
<img id="mainiphone" src="https://static1.squarespace.com/static/521d05e2e4b04fdb82ede5d4/t/526c0155e4b039ceb7d8986f/1382809949346/rc_hand-phone-main.png" alt="">
		</div>
		<div class="col-md-2 col-12 hidden-xs-down hidden-sm-down"><!-- Collone vide !--></div>
	</div>
</div>

		</footer>

	<script src="./assets/js/jquery-3.2.1.js" charset="utf-8"></script>
	<script type="text/javascript" src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
	<script src="./assets/js/bootstrap.js" charset="utf-8"></script>
	<?= $this->section('js') ?> <!-- Appel de la section js qui est situé dans home.php - Cela va récupérer les JS de la map  !-->



</body>
</html>
