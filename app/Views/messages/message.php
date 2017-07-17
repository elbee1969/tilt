<?php
//hérite du fichier layout.php à la racine de app/Views/
$this->layout('layout', ['title' => 'Envoyer un message']);
// initialisation variable de stockage du $user_id
// $b = '';
// $user_id = '';
?>

<?php $this->start('main_content'); ?>

<div class="container-fluid">

  <div class="row">
    <div class="col-12">
      <p id="titleapropos" class="policetitre">Envoyer un message</p>
    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="row">
    <div class="col-12 col-md-8 offset-md-2 offset-0">
      <div class="form-group">
        <form id="tchat_form" action="<?= $this->url('messages_message_action', ['id' => $id, 'user_id' => $user_id]); ?>" method="post">
        <label for="message"></label>
        <textarea id="message" class="form-controlall" name="message" placeholder="Votre message ..." rows="2" cols="100"><?php if(!empty($article['message'])){ echo $article['message'];}; ?></textarea>
        <span style="color:red; font-size:0.70em;" ><?php if(!empty($errors['message'])){ echo $errors['message']; }; ?></span>
        <input class="btn btn-primary btn-lg btn-block" type="submit" name="btnsubmit" value="Envoyer">
        </form>
      </div>
      <a href="<?= $this->url('messages_messages', ['id' => $id,'user_id' => $user_id]); ?>"><p><i class="fa fa-arrow-left" aria-hidden="true"></i> Retour aux messages</p></a>
    </div>
  </div>
</div>

<?php $this->stop('main_content'); ?>
