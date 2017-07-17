<?php
//hérite du fichier layout.php à la racine de app/Views/
$this->layout('layout', ['title' => 'Messagerie']);?>

<?php $this->start('main_content'); ?>

<div class="container-fluid">

  <div class="row">
    <div class="col-12">
      <p id="titleapropos" class="policetitre">Conversation avec <?= $prenom ?></p>
    </div>
  </div>
</div>



<div class="msgs">
<a href="#"></a>

<div class="container-fluid">
  <div class="row">
    <div class="col-12 col-md-8 offset-md-2 offset-0">

  <?php
  if(!empty($messages)){
    foreach ($messages as $message) {
      echo '<div class="alert alert-success" role="alert">';
      echo '<p style="float:left;">'.$prenom.' le '.$message['created_at'].'  : </p>';

      echo '<p><a style="float:right;" href="'.$this->url('messages_messages_sup', ['id' => $message['id_msg'], 'status' => 1, 'ori' => $w_user['id'],'id_r' => $message['id_recepteur'], 'id_e' => $message['id_emetteur'] ]).'"><i class="fa fa-trash" aria-hidden="true"></i></a></p><br>';
      echo '<p class="bold">'.$message['message'].' </p>';
      echo '</div>';
    }
    foreach ($selfmessages as $selfmessage) {
        echo '<div class="alert alert-info" role="alert">';
        echo '<p style="float:right;">Moi le '.$selfmessage['created_at'].'  : </p>';
        echo '<p><a style="float:left;" href="'.$this->url('messages_messages_sup', ['id' => $selfmessage['id_msg'], 'status' => 1, 'ori' => $w_user['id'], 'id_r' => $selfmessage['id_recepteur'], 'id_e' => $selfmessage['id_emetteur']]).'"><i class="fa fa-trash" aria-hidden="true"></i></a></p><br>';
        echo '<p class="bold" style="float:right;">'.$selfmessage['message'].' </p><br>';
        echo '</div>';
    }
  }else{
    echo '<p class="center">Vous n\'avez pas de message !</p>';
  }
  echo '<p class="center"><button type="button" class="btn btn-primary btn-lg"><a style ="color:white; text-decoration : none;" href="'.$this->url('messages_message', ['id' => $id, 'user_id' => $user_id]).'">Envoyer un message à '.$prenom.'</a></button></p><br>';
   ?>
  </div>
</div>

</div>

</div>
<?php $this->stop('main_content'); ?>
