<?php
//hérite du fichier layout.php à la racine de app/Views/
$this->layout('layout', ['title' => 'Ajout apprenant']);
?>

<?php $this->start('main_content'); ?>

<?php
//debug($w_user);
if(in_array($w_user['role'], ['admin', 'apprenant', 'enseignant'])){
  if(in_array($w_user['role'], ['admin', 'apprenant'])){
    echo '<h3>liste des enseignants</h3>';

  }
  if(in_array($w_user['role'], ['admin', 'enseignant'])){
    echo '<h3>liste des apprenants</h3>';
    debug($apprenants);
    foreach ($apprenants as $apprenant) {
      echo '<p>'.$apprenant['pseudo'].' apprenant en : '.$apprenant['name'].' <a href="'. $this->url('messages_messages', ['id' => $user['id'], 'user_id' => $apprenant['user_id']]).'"> vers messagerie</a></p>';
    }
  }
}


 ?>


<?php $this->stop('main_content'); ?>
