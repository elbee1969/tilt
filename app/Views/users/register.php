<?php
//hérite du fichier layout.php à la racine de app/Views/
$this->layout('layout', ['title' => 'Inscription']);
?>

<?php $this->start('main_content');


 ?>


<form id="formconnexion" action="<?= $this->url('users_register_action'); ?>"  method="POST">
  <p>(*) : champs obligatoires</p>

  <div class="">
    <label for="prenom">Votre prenom : (*)</label>
    <input id="prenom" type="text" name="prenom" value="<?php if(!empty($_POST['prenom'])){ echo $_POST['prenom']; }; ?>">
    <span style="color:red; font-size:0.70em;" ><?php if(!empty($errors['prenom'])){ echo $errors['prenom']; }; ?></span>
  </div>
  <div class="">
    <label for="nom">Votre nom : (*)</label>
    <input id="nom" type="text" name="nom" value="<?php if(!empty($_POST['nom'])){ echo $_POST['nom']; }; ?>">
    <span style="color:red; font-size:0.70em;" ><?php if(!empty($errors['nom'])){ echo $errors['nom']; }; ?></span>
  </div>

  <div class="">
    <label for="pseudo">Votre pseudo : (*)</label>
    <input id="pseudo" type="text" name="pseudo" value="<?php if(!empty($_POST['pseudo'])){ echo $_POST['pseudo']; }; ?>">
    <span style="color:red; font-size:0.70em;" ><?php if(!empty($errors['pseudo'])){ echo $errors['pseudo']; }; ?></span>
  </div>

  <div class="">
    <label for="email">votre mail : (*)</label>
    <input id="email" type="text" name="email" value="<?php if(!empty($_POST['email'])){ echo $_POST['email']; }; ?>">
    <span style="color:red; font-size:0.70em;" ><?php if(!empty($errors['email'])){ echo $errors['email']; }; ?></span>
  </div>

  <div class="">
    <label for="region">Votre région : (*)</label>
    <input id="region" type="text" name="region" value="<?php if(!empty($_POST['region'])){ echo $_POST['region']; }; ?>">
    <span style="color:red; font-size:0.70em;" ><?php if(!empty($errors['region'])){ echo $errors['region']; }; ?></span>
  </div>

  <div class="">
    <label for="password">votre mot de passe : (*)</label>
    <input id="password" type="text" name="password" value="<?php if(!empty($_POST['password'])){ echo $_POST['password']; }; ?>">
    <span style="color:red; font-size:0.70em;" ><?php if(!empty($errors['password'])){ echo $errors['password']; }; ?></span>
  </div>

  <div class="">
    <label for="password2">votre mot de passe : (*)</label>
    <input id="password2" type="text" name="password2" value="<?php if(!empty($_POST['password2'])){ echo $_POST['password2']; }; ?>">
    <span style="color:red; font-size:0.70em;" ><?php if(!empty($errors['password2'])){ echo $errors['password2']; }; ?></span>
  </div>

    <input title="s'inscrire'" type="submit" name="submitconnexion" value="S'inscrire"/>
  </form>


<?php $this->stop('main_content'); ?>
