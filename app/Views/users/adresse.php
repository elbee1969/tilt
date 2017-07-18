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
      <form class="adress" action="" method="post">

        <label for="prenom"></label>
        <input  class="form-controlall" placeholder ="Prénom" type="text" name="prenom" value="">
        <span style="color:red; font-size:0.70em;"><?php if(!empty($errors['prenom'])){ echo $errors['prenom']; }; ?></span>

        <label for="nom"></label>
        <input  class="form-controlall" placeholder ="Nom" type="text" name="nom" value="">
        <span style="color:red; font-size:0.70em;"><?php if(!empty($errors['nom'])){ echo $errors['nom']; }; ?></span>

        <label for="number"></label>
        <input class="form-controlall" placeholder ="N° de rue" type="number" min="1" name="number" value="">
        <span style="color:red; font-size:0.70em;"><?php if(!empty($errors['number'])){ echo $errors['number']; }; ?></span>

        <label for="street"></label>
        <input  class="form-controlall" placeholder ="Rue, Avenue, Allée ..." type="text" name="street" value="">
        <span style="color:red; font-size:0.70em;"><?php if(!empty($errors['street'])){ echo $errors['street']; }; ?></span>

        <label for="city"></label>
        <input class="form-controlall" placeholder ="Ville" type="text" name="city" value="">
        <span style="color:red; font-size:0.70em;"><?php if(!empty($errors['city'])){ echo $errors['city']; }; ?></span>

        <label for="postal"></label>
        <input type="number" class="form-controlall" placeholder ="Code postal" name="postal" value="">
        <span style="color:red; font-size:0.70em;"><?php if(!empty($errors['postal'])){ echo $errors['postal']; }; ?></span>


        <input id="addAdress" class="btn btn-primary btn-lg btn-block" title="Ajouter l'adresse" type="submit" name="submit" value="Completez votre profil"/>

      </form>
    </section>
  </div>
</div>



</div>

<?php $this->stop('main_content'); ?>
