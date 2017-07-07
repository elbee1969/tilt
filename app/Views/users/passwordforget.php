<?php $this->layout('layout', ['title' => 'Mot de passe oublié']) ?>

<?php $this->start('main_content') ?>
	<h2>Mot de passe oublié</h2>

    <form class="passwordforget" action="" method="post">

      <label for="email">Email</label><br>
      <span style= "color: red"><?php if(!empty($error['email'])) { echo $error['email']; } ?></span>
      <input type="text" name="email" value="">

      <input type="submit" name="submit" value="Envoyer">
    </form>

  <?php $this->stop('main_content') ?>
