<?php
//hérite du fichier layout.php à la racine de app/Views/
$this->layout('layout', ['title' => 'Ajout apprenant']);
?>

<?php $this->start('main_content'); ?>

<?php
//debug($w_user);
//si admin on affiche la liste des apprenants et enseignants de la region
if(in_array($w_user['role'], ['apprenant', 'enseignant'])){
  //si apprenant on affiche liste des enseignants
  if(in_array($w_user['role'], ['apprenant'])){
    echo '<h3>liste des enseignants de '.$region['name'].'</h3>';
    //debug($enseignants);
    foreach ($enseignants as $enseignant) {
        echo '<p>'.$enseignant['pseudo'].' formateur en  <b>'.$enseignant['name'].'</b> <a href="'. $this->url('messages_messages', ['id' => $user['id'], 'user_id' => $enseignant['user_id']]).'"> vers messagerie</a></p>';
    }
  }
  //si enseignant on affiche liste des apprenants de la region
  if(in_array($w_user['role'], ['enseignant'])){
    echo '<h3>liste des apprenants de '.$region['name'].'</h3>';
    //debug($apprenants);
    foreach ($apprenants as $apprenant) {
      echo '<p>'.$apprenant['pseudo'].' apprenant en  <b>'.$apprenant['name'].'</b> <a href="'. $this->url('messages_messages', ['id' => $user['id'], 'user_id' => $apprenant['user_id']]).'"> vers messagerie</a></p>';
    }
  }
}else{
  echo '<p>Données non disponibles avec le rôle "admin" .....</p>';
  echo '<p>Vers 403</p>';

}


 ?>


<?php $this->stop('main_content'); ?>
