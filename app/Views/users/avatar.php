<?php
//hérite du fichier layout.php à la racine de app/Views/
$this->layout('layout', ['title' => 'profil de '.$w_user['pseudo']]);
?>

<?php $this->start('main_content'); ?>

<h1>Page Profil</h1>
<h2><?= 'Bonjour '.$w_user['pseudo']; ?></h2>

<section class="avatar">
    <form class="avatar" action="" method="post" enctype="multipart/form-data">
      <label for="avatar">Avatar (JPG, PNG ou JPEG | max. 2 Mo) :</label><br/>
      <span><?php if(!empty($errors['avatar'])){ echo $errors['avatar']; }; ?></span>
      <input type="file" name="avatar" id="avatar"><br/>


      <!-- <img src="<?php// echo 'avatar' . basename($_FILES['avatar']['name']); ?>" alt=""> -->

      <input type="submit" name="submit" value="Envoyer">
    </form>
</section>


<?php $this->stop('main_content'); ?>
