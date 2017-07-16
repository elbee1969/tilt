<?php
//hérite du fichier layout.php à la racine de app/Views/
$this->layout('layout', ['title' => 'Cours']);
?>

<?php $this->start('main_content'); ?>

<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <p id="titleconnexion" class="policetitre">Liste des cours à suivre</p><br>
    <!--  <p>Manque la pagination, le foreach ...</p><br> -->
    </div>
  </div>
</div>

<form class="" action="<?= $this->url('tutorat_cours_action', ['user_id' => $w_user['id'], 'region_id' => $w_user['region_id']]); ?>" method="post">

  <?php
  //debug($categories);
  //debug($cours);
  //debug($cat);
//debug($w_user);
  $i=0;
  $a = 0;

?>

<div class="container-fluid">
  <div class="row">



<?php

  foreach ($categories as $key => $value) {
    ?> <div class="col-md-3 col-12">

<?php

      echo '<p class="policejosefin center bold">'.$cat[$i++].'</p> '.$key[0]; ?> <br> <?php
      foreach ($value as $key => $val) {
        echo '<p class="center"><input type="checkbox" id="cbox'.++$a.'" name="'.$val['name'].'" value="'.$a.'"><label for="cbox'.$a.'">'.$val['name'].'</label><p>';# code...
      }
  //echo $value[0]['name'].'<br>';
 ?>     </div> <?php
  }

  ?>


</div>
</div>
  <p class="center" style="margin-top: 50px;"><input class="btn btn-primary btn-lg" type="submit" name="btnsubmit" value="Suivre ces cours"></p>
</form>


<?php $this->stop('main_content'); ?>
