<?php
//hérite du fichier layout.php à la racine de app/Views/
$this->layout('layout', ['title' => 'profil de '.$w_user['pseudo']]);
?>

<?php $this->start('main_content'); ?>


<div class"container-fluid">
<div class="row">
  <div class="col-1">

  </div>
    <div class="col-2">
      <div class="card">
  <p class="center"><img class="rounded-circle profilepicture" src="./assets/img/profil.jpg" alt="Card image cap"></p>
  <div class="card-block">
    <h4 class="center"><?= $w_user['pseudo']; ?></h4>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><?= $w_user['email']; ?></li>
    <li class="list-group-item"><?= 'Inscrit le '.$w_user['created_at']; ?></li>
    <li class="list-group-item"><?= 'Région : '.$w_user['region_id']; ?></li>
    <li class="list-group-item"><a href="#">Modifier mes informations</a></li>
  </ul>
</div>
    </div>

    <div class="col-8">
      <div class="card" >
    <p id="titleprofil" class="policetitre">Vos statistiques</p>
  <div class="card-block">
<div class="row">
  <div class="col-6">
<p class="center">Cours suivis</p>
  </div>
  <div class="col-6">
<p class="center">Cours donnés</p>
  </div>
</div>
<div class="row">

</div>
  </div>

</div>
    </div>
</div>
  </div>













<div class="infouser">
  <div class="first_name">
    <?= $w_user['first_name']; ?>
  </div>
  <div class="last_name">
    <?= $w_user['last_name']; ?>
  </div>
  <div class="mail">
    <?= $w_user['email']; ?>
  </div>
  <div class="role">
    <?= $w_user['role']; ?>
  </div>
  <div class="created_at">
    <?= $w_user['created_at']; ?>
  </div>
</div>


<section>
  <form class="adress" action="<?php echo $this->url('users_profil_action'); ?>" method="POST">
    <label for="number">Numéro :</label><br>
    <span><?php if(!empty($errors['number'])){ echo $errors['number']; }; ?></span><br>
    <input type="number" name="number" value=""><br>

    <label for="street">Rue :</label><br>
    <span><?php if(!empty($errors['street'])){ echo $errors['street']; }; ?></span><br>
    <input type="text" name="street" value=""><br>

    <label for="city">Ville :</label><br>
    <span><?php if(!empty($errors['city'])){ echo $errors['city']; }; ?></span><br>
    <input type="text" name="city" value=""><br>

    <label for="postal">Code postal :</label><br>
    <span><?php if(!empty($errors['postal'])){ echo $errors['postal']; }; ?></span><br>
    <input type="number" name="postal" value=""><br>

    <input type="submit" name="submit" value="Completez votre profil">
  </form>
</section>

<a href="<?= $this->url('users_avatar') ?>">Avatar</a>

<?php debug($regionName); ?>

<?php $this->stop('main_content'); ?>
