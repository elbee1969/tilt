<?php
//hérite du fichier layout.php à la racine de app/Views/
$this->layout('layout', ['title' => 'Cours']);
?>

<?php $this->start('main_content'); ?>
<h1>Listes des cours</h1>
<form class="" action="<?= $this->url('tutorat_cours_action', ['user_id' => $w_user['id'], 'region_id' => $w_user['region_id']]); ?>" method="post">

  <?php
  //debug($categories);
  //debug($cours);
  //debug($cat);
//debug($w_user);
  $i=0;
  $a = 0;
  foreach ($categories as $key => $value) {

      echo '<b>'.$cat[$i++].'</b> '.$key[0];
      echo '<p>';
      foreach ($value as $key => $val) {
        echo '<input type="checkbox" id="cbox'.++$a.'" name="'.$val['name'].'" value="'.$a.'"><label for="cbox'.$a.'">'.$val['name'].'</label>';# code...
      }
      echo '</p>';
  //echo $value[0]['name'].'<br>';
  }

  ?>
  <input type="submit" name="btnsubmit" value="Inscription">
</form>


<?php $this->stop('main_content'); ?>
