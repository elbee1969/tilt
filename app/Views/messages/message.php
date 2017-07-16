<?php
//hérite du fichier layout.php à la racine de app/Views/
$this->layout('layout', ['title' => 'Mes message']);
// initialisation variable de stockage du $user_id
// $b = '';
// $user_id = '';
?>

<?php $this->start('main_content'); ?>

<h1>Page message</h1>
<?php
echo $id;
echo $user_id;

 ?>
<div class="form-group">
  <form id="tchat_form" action="<?= $this->url('messages_message_action', ['id' => $id, 'user_id' => $user_id]); ?>" method="post">
    <!-- <input style=" display:none;" type="text" name="user_id" value="<?php //if(isset($b)){ echo $b;}; ?>">-->
    <label for="message">votre message</label>
    <textarea id="message" name="message" rows="2" cols="100"><?php if(!empty($article['message'])){ echo $article['message'];}; ?></textarea>
    <span style="color:red; font-size:0.70em;" ><?php if(!empty($errors['message'])){ echo $errors['message']; }; ?></span>
    <input type="submit" name="btnsubmit" value="Envoi message">
  </form>
</div>


<?php $this->stop('main_content'); ?>
