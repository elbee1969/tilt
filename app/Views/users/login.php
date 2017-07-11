<?php
//hérite du fichier layout.php à la racine de app/Views/
$this->layout('layout', ['title' => 'Login']);
?>

<?php $this->start('main_content'); ?>


<div class="container-fluid">
<div class="row">
  <div class="col-12">
    <p id="titleconnexion" class="policetitre">Connectez-vous aux Tilters !</p>
  </div>
</div>

<div class="row">
  <div class="col-4">
    <!-- Rien dans cette col, c'est pour centrer la deuxième !-->
  </div>
  <div class="col-md-4 col-xl-4 col-12">
  <div class="form-group">
    <form class="" action="<?= $this->url('login_action'); ?>" method="post">
    <label for="prenom"></label>
    <div class="col-12">
      <label  for="connexion"></label>
      <input class="form-controlall" id="connexion" type="text" placeholder="Pseudo ou email" name="connexion" value="<?php if(!empty($_POST['connexion'])){ echo $_POST['connexion']; }; ?>">
      <span style="color:red; font-size:0.70em;" ><?php if(!empty($errors['connexion'])){ echo $errors['connexion']; }; ?></span>


      <label for="password"></label>
      <input class="form-controlall" id="password" type="password" placeholder="Mot de passe" name="password" value="<?php if(!empty($_POST['password'])){ echo $_POST['password'];}; ?>">
      <span style="color:red; font-size:0.70em;" ><?php if(!empty($errors['password'])){ echo $errors['password']; };   ?></span>
      <span style="font-size:0.70em;" ><a href="<?= $this->url('passwordforget'); ?>" > Mot de passe oublié</a></span>



    <input class="btn btn-primary btn-lg btn-block" title="Se connecter" type="submit" name="btnSubmit" value="Je rejoins les tilters ! "/>
    </div>
    </form>
  </div>
  </div>


</div>
  <div class="col-4">
    <!-- Rien dans cette col, c'est pour centrer la deuxième !-->
  </div>



<?php $this->stop('main_content'); ?>
