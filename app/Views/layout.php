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
		<link rel="icon" type="image/png" href="<?= $this->assetUrl('img/favicon.png')?>" />

	</head>
	<body>
		<header>
			<nav class="navbar navbar-toggleable-md navbar-inverse fixed-top" style="background-color:#3f51b5">
			  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>
			  <a class="navbar-brand" href="<?= $this->url('default_home'); ?>"><p id="logo_navbar">Tilt</p>
				<p class="slogan">Teach it learn that !</p></a>
			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			    <ul class="navbar-nav mr-auto">
						<li>
							<a class="nav-link" href="<?= $this->url('default_apropos'); ?>">A propos</a>
						</li>
						<li>
							<a class="nav-link" href="<?= $this->url('default_contact'); ?>">Contact</a>
						</li>
						<?php if(in_array($w_user['role'], ['apprenant', 'enseignant'])){ ?>
						<li>
							<a class="nav-link" href="<?= $this->url('tutorat_tutorat'); ?>">Tutorat</a>
						</li>
						<?php } ?>


			    </ul>

			    	<form class="form-inline my-2 my-lg-0">
						<?php if(in_array($w_user['role'], ['admin','apprenant', 'enseignant','guest'])){ ?>

							<li>
								<a class="nav-link" href="<?= $this->url('users_profil'); ?>"><?= ' '.$w_user['pseudo']; ?></a>
							</li>
							<?php } ?>

							<?php if(in_array($w_user['role'], ['admin'])){ ?>
								<li>
									<a class="nav-link" href="<?= $this->url('back_home'); ?>">Backoffice</a>
								</li>
							<?php }
						 if($w_user){ ?>
							<a class= "nav-link" href="<?= $this->url('logout'); ?>  ">
								<i class="fa fa-sign-out" title="déconnexion" aria-hidden="true">
								</i>
							</a>
						<?php }else{ ?>
							<ul class="navbar-nav mr-auto">
			        	<li>
									<a class="nav-link" href="<?= $this->url('users_register'); ?>">Inscription</a>
								</li>
								<li>
									<a class="nav-link" href="<?= $this->url('login'); ?>">Connexion</a>
								</li>
							</ul>
						<?php } ?>
			    </form>
			  </div>
			</nav>
		</header>
		<section class="backgroundsection">
			<?= $this->section('main_content') ?>
		</section>

		<img id="footericon" src="<?= $this->assetUrl('img/footericon.png') ?>" alt="">
		<footer style="background-color:#3f51b5;">
			<div class="container-fluid">
				<div class="row">
					<div class="col-12">
					</div>

				</div>
				<div class="row">
					<div class="col-2 hidden-xs-down hidden-sm-down"><!-- Collone vide !--></div>
					<div class="col-md-3 col-12">
						<div class="row">
						<div class="col-md-12">
							<p id="logo_footer" style="margin-top: 20px;" class="center">Tilt</p>
						</div>
					</div>
						<div class="row">
							<div class="col-md-12 col-12">
								<ul style="margin-top: 10px;">
									<li class="center"><a style="text-decoration:none ; color : white !important;" href="<?= $this->url('mentions_mentions'); ?>">Mentions légales</a></li>
									<li class="center"><a style="text-decoration:none ; color : white !important;" href="<?= $this->url('default_contact'); ?>">Contact</a></li>
									<li class="center"><a style="text-decoration:none ; color : white !important;" href="<?= $this->url('cgu_cgu'); ?>">CGU</a></li>
									<li class="center"><a style="text-decoration:none ; color : white !important;" href="<?= $this->url('faq_faq'); ?>">FAQ</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-2 col-12">
						<div class="container-fluid">
							<div class="row">
								<div class="col-12 align-self-start">
									<p class="copyright">
										<a target="_blank" href="https://facebook.fr"><i class="fa fa-facebook fa-3x" aria-hidden="true"></i></a>
										<a target="_blank" href="https://twitter.fr"><i class="fa fa-twitter fa-3x" aria-hidden="true"></i></a>
									</p>
								</div>
							</div>
							<div class="row align-items-end">
								<div class="col-12 align-self-end">
									<p class="copyright" id="copyright" style="color: white;"> © 2017 Tilt | Webforce3 </p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-2 col-12 align-self-center">
						<p class="copyright"><a target="_blank" href="https://search.itunes.apple.com/WebObjects/MZContentLink.woa/wa/link?mt=8&path=appstore"><img id="appstore" src="<?= $this->assetUrl('img/download-appstore.png') ?>" alt=""></a> <a target="_blank" href="https://play.google.com/store?hl=fr"><img id="googleplay" src="<?= $this->assetUrl('img/download-googleplay.png') ?>" alt=""></a></p>
					</div>
					<div class="col-md-2 col-12 align-self-end hidden-xs-down hidden-sm-down">
						<img id="mainiphone" src="<?= $this->assetUrl('img/tilt_iphone.png') ?>" alt="">
					</div>
					<div class="col-md-2 col-12 hidden-xs-down hidden-sm-down"><!-- Collone vide !--></div>
				</div>
			</div>
		</footer>

		<script src="<?= $this->assetUrl('js/jquery-3.2.1.js')?>" charset="utf-8"></script>
		<script type="text/javascript" src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
		<script src="<?= $this->assetUrl('js/bootstrap.js')?>" charset="utf-8"></script>
		<script src="<?= $this->assetUrl('js/count.js')?>" charset="utf-8"></script>
		<?= $this->section('js') ?> <!-- Appel de la section js qui est situé dans home.php - Cela va récupérer les JS de la map  !-->

	</body>
</html>
