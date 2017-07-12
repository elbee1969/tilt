<?php
//hérite du fichier layout.php à la racine de app/Views/
$this->layout('layout', ['title' => 'Messagerie']);
?>

<?php $this->start('main_content'); ?>

<h1>Page messages</h1>

<div class="form-group">

  <form id="tchat_form" action="<?= $this->url('messages_messages_action'); ?>" method="post">
    <label for="message">votre message</label>
    <textarea id="message" name="message" rows="2" cols="100"></textarea>
    <span style="color:red; font-size:0.70em;" ><?php if(!empty($errors['message'])){ echo $errors['message']; }; ?></span>
    <input type="submit" name="btnsubmit" value="Envoi message">
  </form>
</div>

<div class="msgs">

  <?php

  if(!empty($messages)){

    foreach ($messages as $message) {
      echo '<div style="border: 1px solid black;" class="msg">';
      echo '<p>Message de '.$prenom.' : '.$message['message'].' envoyé le : '.$message['created_at'].'</p>';
      echo '</div>';
    }
    foreach ($selfmessages as $selfmessage) {
        echo '<div style="border: 1px solid red;" class="msg">';
        echo 'Message de '.$w_user['pseudo'].' : '.$selfmessage['message'];
        echo '</div>';
    }
  }else{
    echo 'Vous n\'avez pas de message !';
  }

   ?>


  </div>

<?php $this->stop('main_content'); ?>
