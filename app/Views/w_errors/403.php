<?php $this->layout('layout', ['title' => 'Nothing to see here']) ?>

<?php $this->start('main_content'); ?>

<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<p class="policetitre" id="erreur"> Erreur 404</p>
<p class="center">Oooops ! Il semblerait que vous n'avez pas accès à cete page !</p>
<p class="center"><a href="<?= $this->url('default_home'); ?>">Revenir à l'accueil</a></p>

<p class="center"><img src="./assets/img/403forbiddenerror.png" alt=""></p>







<?php $this->stop('main_content'); ?>
