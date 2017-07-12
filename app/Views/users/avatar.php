<?php
//hérite du fichier layout.php à la racine de app/Views/
$this->layout('layout', ['title' => 'profil de '.$w_user['pseudo']]);
?>

<?php $this->start('main_content'); ?>

<div class="container-fluid">

<<<<<<< HEAD
<section class="avatar">
    <form class="avatar" action="" method="post" enctype="multipart/form-data">
      <label for="avatar">Avatar (JPG, PNG ou JPEG | max. 2 Mo) :</label><br/>
      <span><?php if(!empty($errors['avatar'])){ echo $errors['avatar']; }; ?></span>
      <input type="file" name="avatar" id="avatar"><br/>


      <!-- <img src="<?php// echo 'avatar' . basename($_FILES['avatar']['name']); ?>" alt=""> -->

      <input type="submit" name="submit" value="Envoyer">
=======
  <div class="row">
    <div class="col-12">
      <p id="titleapropos" class="policetitre">Ajouter ou modifier votre avatar</p>
      <p class="center">Ajoutez du style à votre profil en personnalisant votre avatar !</p>
      <p class="center">Votre avatar doit être au format JPG, PNG ou JPEG et ne doit pas exceder 2 Mo.</p>
    </div>
  </div>

<div class="row">

<div class="col-4">

</div>

<div class="col-4">
<div class="center">
  <section class="avatar">
    <form class="avatar" action="<?php echo $this->url('users_avatar_action'); ?>" method="post" enctype="multipart/form-data">
      <label for="avatar"></label><br/>
      <input class="form-controlall" type="file" name="avatar" id="avatar"><br/>
      <input class="form-controlall" type="submit" name="submit" value="Envoyer">
      <span style="color:red; font-size:0.70em;"><?php if(!empty($errors['avatar'])){ echo $errors['avatar']; }; ?></span>
>>>>>>> 9a8f4eda84b9561117f1775eab2af0b1f1b3796d
    </form>
  </section>

</div>
</div>


</div>


</div>

<?php $this->stop('main_content'); ?>
