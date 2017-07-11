<?php
//hérite du fichier layout.php à la racine de app/Views/
$this->layout('layout', ['title' => 'Nom de la région']);
?>

<?php $this->start('main_content'); ?>

<div class="container-fluid">
<div class="row">
  <div class="col-12">
    <p id="titleconnexion" class="policetitre"><?php echo $region['name']; ?></p>
  </div>
</div>

<div class="row">
  <marquee> Les blablabla</marquee>
</div>




</div>

<?php $this->stop('main_content'); ?>
