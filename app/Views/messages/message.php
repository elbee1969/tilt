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
    <span id="resultat" style="color:red; font-size:0.70em;" ><?php // if(!empty($errors['message'])){ echo $errors['message']; }; ?></span>
    <input type="submit" name="btnsubmit" value="Envoi message">
  </form>
</div>

<?php
echo '<a href="'. $this->url('tutorat_tutorat').'"> vers tutorat</a>';
?>

<?php $this->stop('main_content'); ?>


<?php $this->start('js'); ?>


<script type="text/javascript">

$('#tchat_form').on('submit',function(e){
  e.preventDefault();
   var message = $('#message').val();

  $.ajax({
    type: "POST",
    url: $(this).attr('action'),
    data: {message:message},

    success: function(reponse) {
      console.log(reponse);

      //traitement des erreurs
      if(reponse.success == true) {

        window.alert("message envoyé!");
        window.location.reload(true);

      } //ferme if(reponse.success == true)
      else {
        // il y a des messages d'erreur
        $('#resultat').html(reponse.errors.message);

      } //ferme le else, donc si il y a des messages d'erreur

    } //ferme success: function(reponse)
  }); //ferme $.ajax
}); //ferme submit(function())

</script>

<?php $this->stop('js'); ?>
