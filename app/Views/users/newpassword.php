<?php $this->layout('layout', ['title' => 'Nouveau mot de passe']) ?>

<?php $this->start('main_content') ?>
	<h2>Nouveau mot de passe</h2>

    <form class="newpassword" action="<?php $this->url('newpassword_action'); ?>" method="post">

      <label for="newpassword">Nouveau mot de passe</label><br>
      <span style= "color: red"><?php if(!empty($error['newpassword'])) { echo $error['newpassword']; } ?></span>
      <input type="text" name="newpassword" value=""><br>

      <label for="confpassword">Confirmation du nouveau mot de passe</label><br>
      <input type="text" name="confpassword" value=""><br>

      <input type="submit" name="submit" value="Envoyer">
    </form>

  <?php $this->stop('main_content') ?>
