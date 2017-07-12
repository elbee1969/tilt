<?php $this->layout('layout', ['title' => 'Mot de passe oublié']) ?>

<?php $this->start('main_content') ?>

<div class="container-fluid">
<div class="row">
  <div class="col-12">
    <p id="titleconnexion" class="policetitre">Mot de passe oublié</p>
  </div>
</div>

<div class="row">
	<div class="col-4">

	</div>

	<div class="col-md-4 col-xl-4 col-12">
<p class="center policejosefin">Vous avez oublié votre mot de passe ? <br>Pas d'inquiétude, renseignez juste votre adresse mail et nous vous renverrons un nouveau mot de passe.</p>

	<form class="passwordforget" action="" method="post">
	<label for="email"></label>
	<div class="col-12">
		<label  for="connexion"></label>
		<input class="form-controlall"  type="text" placeholder="Adresse email" name="email" value="">
		<span style="color:red; font-size:0.70em;" ><?php if(!empty($error['email'])) { echo $error['email']; } ?></span>
		<input id="btnlostpassword" class="btn btn-primary btn-lg btn-block" title="Nouveau mot de passe" type="submit" name="submit" value="Nouveau mot de passe "/>
	</div>
</form>

</div>




  <?php $this->stop('main_content') ?>
