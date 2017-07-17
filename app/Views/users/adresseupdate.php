<?php
//hérite du fichier layout.php à la racine de app/Views/
$this->layout('layout', ['title' => 'Communauté']);

$this->start('main_content'); ?>

<div class="container-fluid">
<div class="row">
  <div class="col-12">
    <p id="titleconnexion" class="policetitre">Modifiez votre adresse</p>
  </div>
</div>
<div class="row">
  <div class="col-4">

  </div>
  <div class="col-4">
    <section>
      <form class="adress" action="<?php $this->url('users_adresse_update_action') ?>" method="post">

        <label for="prenom"></label>
        <span><?php if(!empty($errors['prenom'])){ echo $errors['prenom']; }; ?></span>
        <input  class="form-controlall" placeholder ="Prénom" type="text" name="prenom" value="<?php if(!empty($prenom)){ echo $prenom; }; ?>">

        <label for="nom"></label>
        <span><?php if(!empty($errors['nom'])){ echo $errors['nom']; }; ?></span>
        <input  class="form-controlall" placeholder ="Nom" type="text" name="nom" value="<?php if(!empty($nom)){ echo $nom; }; ?>">

        <label for="number"></label>
        <span><?php if(!empty($errors['number'])){ echo $errors['number']; }; ?></span>
        <input class="form-controlall" placeholder ="N° de rue" type="number" min="1" name="number" value="<?php if(!empty($num_rue)){ echo $num_rue; }; ?>">

        <label for="street"></label>
        <span><?php if(!empty($errors['street'])){ echo $errors['street']; }; ?></span>
        <input  class="form-controlall" placeholder ="Rue, Avenue, Allée ..." type="text" name="street" value="<?php if(!empty($nom_voie)){ echo $nom_voie; }; ?>">

        <label for="city"></label>
        <span><?php if(!empty($errors['city'])){ echo $errors['city']; }; ?></span>
        <input class="form-controlall" placeholder ="Ville" type="text" name="city" value="<?php if(!empty($ville)){ echo $ville; }; ?>">

        <label for="postal"></label>
        <span><?php if(!empty($errors['postal'])){ echo $errors['postal']; }; ?></span>
        <input type="number" class="form-controlall" placeholder ="Code postal" name="postal" value="<?php if(!empty($code_postal)){ echo $code_postal; }; ?>">


        <input id="addAdress" class="btn btn-primary btn-lg btn-block" title="Ajouter l'adresse" type="submit" name="submit" value="Completez votre profil"/>

      </form>
    </section>
  </div>
</div>



</div>

<?php $this->stop('main_content'); ?>
