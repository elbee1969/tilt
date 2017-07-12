<?php $this->layout('layout', ['title' => 'Nouveau mot de passe']) ?>

<?php $this->start('main_content') ?>

	<div class="container-fluid">
	<div class="row">
	  <div class="col-12">
	    <p id="titleconnexion" class="policetitre">Nouveau mot de passe</p>
	  </div>
	</div>












    <form class="newpassword" action="<?php $this->url('newpassword_action'); ?>" method="post">

      <label for="newpassword">Nouveau mot de passe</label><br>
      <span style= "color: red"><?php if(!empty($error['password'])) { echo $error['password']; } ?></span>
      <input type="text" name="newpassword" value=""><br>

      <label for="confpassword">Confirmation du nouveau mot de passe</label><br>
      <input type="text" name="confpassword" value=""><br>

      <input type="submit" name="submit" value="Envoyer">
    </form>

  <?php $this->stop('main_content') ?>
