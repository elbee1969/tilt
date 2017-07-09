<?php
//hérite du fichier layout.php à la racine de app/Views/
$this->layout('layout', ['title' => 'Contact']);
?>

<?php $this->start('main_content'); ?>

<h1>Page Contact</h1>

<div class="container">
  <h1>Veuiller remplir les champs ci-dessous !</h1><br>
<form class="formu" action="<?= $this->url('default_contact_action'); ?>" method="post">
  <p class="asterisc">Tous les champs marqués d'un astérisque (*) sont obligatoires.</p>

  <div id="formulaire" class="form-group row">
      <label for="prenom" class="col-sm-2 col-form-label">Pr&eacute;nom *</label>
      <div class="col-sm-6">
        <input id="prenom" type="text" class="form-control" name="prenom" value="<?php if(!empty($_POST['prenom'])){ echo $_POST['prenom'];};  ?>">
      </div>
      <div class="custom-control-description"> <?php if(!empty($errors['prenom'])){ echo $errors['prenom']; }; ?></div>
  </div>
  <div class="form-group row">
      <label for="nom" class="col-sm-2 col-form-label">Nom *</label>
      <div class="col-sm-6">
        <input id="nom" type="text" class="form-control" name="nom" value="<?php if(!empty($_POST['nom'])){ echo $_POST['nom'];}; ?>">
      </div>
      <div class="custom-control-description"> <?php if(!empty($errors['nom'])){ echo $errors['nom']; }; ?></div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-sm-2 col-form-label">Email *</label>
    <div class="col-sm-6">
      <input id="email" type="email" class="form-control"  name="email" value="<?php if(!empty($_POST['email'])){ echo $_POST['email'];}; ?>">
    </div>
    <div class="custom-control-description"> <?php if(!empty($errors['email'])){ echo $errors['email']; }; ?></div>
  </div>

  <div class="form-group row">
    <label for="message" class="col-sm-2 col-form-label">Message *</label>
    <div class="col-sm-6">
      <textarea id="message" class="form-control" name="message" rows="6"><?php if(!empty($_POST['message'])){ echo $_POST['message'];}; ?></textarea>
    </div>
    <div class="custom-control-description"><?php if(!empty($errors['message'])){ echo $errors['message']; }; ?></div>
  </div>

  <div>
    <input type="submit" name="btnSubmit" value="Envoyer">
  </div>

</form>
</div>

<?php $this->stop('main_content'); ?>
