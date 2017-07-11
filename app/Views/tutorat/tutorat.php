<?php
//hérite du fichier layout.php à la racine de app/Views/
$this->layout('layout', ['tutorat' => 'Ajout apprenant']);
?>

<?php $this->start('main_content'); ?>

<h1>Page Ajout apprenant</h1>




<?php
debug($w_user);
  foreach ($apprenants as $apprenant) {
  //   echo '<div style="border: 1px solid black;" class="msg">';
  //   //foreach ($users as $user) {
  //   //  if($message['user_id'] == $user['id']){
  //   //    echo '<p><span>Message de '.$user['pseudo'].' : </span>';
  //   //  }
  //   //}
    echo '<p><span>Apprenant : '.$apprenant['pseudo'].' : </span>';
  //
  //
  //   echo '</div>';
  }

 ?>


<?php $this->stop('main_content'); ?>
