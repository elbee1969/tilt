<?php
//hérite du fichier layout.php à la racine de app/Views/
$this->layout('layout', ['title' => 'Login']);
?>

<?php $this->start('main_content'); ?>
<div class="">

  <form class="" action="<?= $this->url('login_action'); ?>" method="post">

    <div class="">
      <label  for="connexion">Entrer votre pseudo ou votre email</label>
      <input id="connexion" type="text" name="connexion" value="<?php if(!empty($_POST['connexion'])){ echo $_POST['connexion'];}; ?>">
      <span style="color:red; font-size:0.70em;" ><?php if(!empty($errors['connexion'])){ echo $errors['connexion']; };  ?></span>
    </div>

    <div class="">
      <label for="password">votre password</label>
      <input id="password" type="password" name="password" value="<?php if(!empty($_POST['password'])){ echo $_POST['password'];}; ?>">
      <span style="color:red; font-size:0.70em;" ><?php if(!empty($errors['password'])){ echo $errors['password']; };   ?></span>
    </div>

    <div class="">
      <p><a href="<?= $this->url('passwordforget'); ?>" > Mot de passe oublié</a></p>
    </div>



    <input class="btn btn-default" type="submit" name="btnSubmit" value="Se logger">

  </form>
</div>

  <a href="<?= $this->url('users_register'); ?>">Inscription</a>

<?php $this->stop('main_content'); ?>
