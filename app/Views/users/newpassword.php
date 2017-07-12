<?php $this->layout('layout', ['title' => 'Nouveau mot de passe']) ?>

<?php $this->start('main_content') ?>

	<div class="container-fluid">
	<div class="row">
	  <div class="col-12">
	    <p id="titleconnexion" class="policetitre">Nouveau mot de passe</p>
	  </div>
	</div>


<div class="row">
<div class="col-4">

</div>
<div class="col-4">

	<form class="newpassword" action="<?php $this->url('newpassword_action'); ?>" method="post">

		<label for="newpassword"></label><br>
		<span style= "color: red"><?php if(!empty($error['password'])) { echo $error['password']; } ?></span>
		<input type="text" class="form-controlall" placeholder="Nouveau mot de passe" name="newpassword" value=""><br>

		<label for="confpassword"></label><br>
		<input type="text" class="form-controlall" placeholder="Confirmation du nouveau mot de passe" name="confpassword" value=""><br>

		<input class="btn btn-primary btn-lg btn-block" id="bntnewpassword" type="submit" name="submit" value="Envoyer">
	</form>
</div>














</div>










  <?php $this->stop('main_content') ?>
