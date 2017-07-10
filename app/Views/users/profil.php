<?php
//hérite du fichier layout.php à la racine de app/Views/
$this->layout('layout', ['title' => 'profil de '.$w_user['pseudo']]);
?>

<?php $this->start('main_content'); ?>

<h1>Page Profil</h1>
<h2><?= 'Bonjour '.$w_user['pseudo']; ?></h2>

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


<?php $this->stop('main_content'); ?>
