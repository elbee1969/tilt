<?php
//hérite du fichier layout.php à la racine de app/Views/
$this->layout('layout', ['title' => 'Communauté']);

$this->start('main_content'); ?>

<div class="container-fluid">
<div class="row">
  <div class="col-12">
    <p id="titleconnexion" class="policetitre">Votre adresse</p>
  </div>
</div>
<div class="row">
  <div class="col-4">

  </div>
  <div class="col-4">
    <section>
      <form class="adress" action="" method="POST">
        <label for="number"></label>
        <span><?php if(!empty($errors['number'])){ echo $errors['number']; }; ?></span>
        <input class="form-controlall" placeholder ="N° de rue" type="number" min="1" name="number" value="">

        <label for="street"></label>
        <span><?php if(!empty($errors['street'])){ echo $errors['street']; }; ?></span>
        <input  class="form-controlall" placeholder ="Rue, Avenue, Allée ..." type="text" name="street" value="">

        <label for="city"></label>
        <span><?php if(!empty($errors['city'])){ echo $errors['city']; }; ?></span>
        <input class="form-controlall" placeholder ="Ville" type="text" name="city" value="">

        <label for="postal"></label>
        <span><?php if(!empty($errors['postal'])){ echo $errors['postal']; }; ?></span>
        <input type="number" class="form-controlall" placeholder ="Code postal" name="postal" value="">


        <input id="addAdress" class="btn btn-primary btn-lg btn-block" title="Ajouter l'adresse" type="submit" name="submit" value="Completez votre profil"/>

      </form>
    </section>
  </div>
</div>



</div>

<?php $this->stop('main_content'); ?>
