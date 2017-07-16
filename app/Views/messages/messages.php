<?php
//hérite du fichier layout.php à la racine de app/Views/
$this->layout('layout', ['title' => 'Messagerie']);?>

<?php $this->start('main_content'); ?>

<h1>Page messages</h1>
<div class="msgs">
<a href="#"></a>
  <?php
  echo '<a href="'.$this->url('messages_message', ['id' => $id, 'user_id' => $user_id]).'">Envoyer un message à '.$prenom.'</a><br>';

  if(!empty($messages)){
    foreach ($messages as $message) {
      echo '<div style="border: 1px solid black;" class="msg">';
      echo '<p>Message de '.$prenom.' : '.$message['message'].' </p>
      <p>envoyé le : '.$message['created_at'].'<a href="'.$this->url('messages_messages_sup', ['id' => $message['id_msg'], 'status' => 1, 'ori' => $w_user['id'],'id_r' => $message['id_recepteur'], 'id_e' => $message['id_emetteur'] ]).'"><i class="fa fa-trash" aria-hidden="true"></i></a></p>';
      echo '</div>';
    }
    foreach ($selfmessages as $selfmessage) {
        echo '<div style="border: 1px solid red;" class="msg">';
        echo 'Message de moi '.$w_user['pseudo'].' : '.$selfmessage['message'].' </p>
        <p>envoyé le : '.$selfmessage['created_at'].'<a href="'.$this->url('messages_messages_sup', ['id' => $selfmessage['id_msg'], 'status' => 1, 'ori' => $w_user['id'], 'id_r' => $selfmessage['id_recepteur'], 'id_e' => $selfmessage['id_emetteur']]).'"><i class="fa fa-trash" aria-hidden="true"></i></a>';
        echo '</div>';
    }
  }else{
    echo 'Vous n\'avez pas de message !';
  }
   ?>
  </div>

<?php $this->stop('main_content'); ?>
