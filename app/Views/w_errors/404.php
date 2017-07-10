<?php $this->layout('layout', ['title' => 'Perdu ?']) ?>

<?php $this->start('main_content'); ?>

<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<p class="policetitre" id="erreur"> Erreur 404</p>
<p class="center">Oooops ! Il semblerait que cette page n'existe pas !</p>
<p class="center"><a href="<?= $this->url('default_home'); ?>">Revenir à l'accueil</a></p>

<p class="center"><img src="https://media.giphy.com/media/ZeeUrTADWgFUc/giphy.gif" alt=""></p>

<?php $this->stop('main_content'); ?>
