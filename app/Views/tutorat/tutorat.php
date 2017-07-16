<?php
//hérite du fichier layout.php à la racine de app/Views/
$this->layout('layout', ['title' => 'Ajout apprenant']);
?>

<?php $this->start('main_content'); ?>
<?php
if(in_array($w_user['role'], ['apprenant', 'enseignant'])){
  //si apprenant on affiche liste des enseignants

  if(in_array($w_user['role'], ['apprenant'])){
    echo '<p><a href="'. $this->url('tutorat_disponibilites', ['region_id' => $w_user['region_id']]).'">Voir les offres de formations</p>';
    echo '<p><a href="'. $this->url('tutorat_cours').'">s\'inscrire</a>  à un cours</p>';
    echo '<h3>liste de mes enseignants</h3>';

    foreach ($msgenseignants as $msg) {
        echo '<p>'.$msg['pseudo'].' formateur en  <b>'.$msg['matiere'].'</b> dans la région '.$msg['region'].' <a href="'. $this->url('messages_messages', ['id' => $msg['id_apprenant'], 'user_id' => $msg['id']]).'"> vers messagerie</a></p>';
    }
  }
  //si enseignant on affiche liste des apprenants de la region
  if(in_array($w_user['role'], ['enseignant'])){
    //debug($w_user);
    echo '<p><a href="'. $this->url('tutorat_disponibilites', ['region_id' => $w_user['region_id']]).'">Voir les demandeurs</p>';
    echo '<p><a href="'. $this->url('tutorat_cours').'">Donner</a>  des cours</p>';
    echo '<h3>liste des mes apprenants</h3>';

    foreach ($msgapprenants as $msg) {
      echo '<p>'.$msg['pseudo'].' apprenant en  <b>'.$msg['matiere'].'</b> dans la région '.$msg['region'].'<a href="'. $this->url('messages_messages', ['id' => $msg['id_enseignant'], 'user_id' => $msg['id']]).'"> vers messagerie</a></p>';
    }
  }
}else{
  echo '<p>Données non disponibles avec le rôle "admin" .....</p>';
  echo '<p>Vers 403</p>';

}


 ?>


<?php $this->stop('main_content'); ?>
