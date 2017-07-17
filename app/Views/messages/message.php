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
          <textarea id="message" class="form-controlall" name="message" rows="2" cols="100"><?php if(!empty($article['message'])){ echo $article['message'];}; ?></textarea>
          <span id="resultat" style="color:red; font-size:0.70em;" ></span> <!-- Nicolas a ajouté l'id resultat et a supprimé l'affichage classique des messages d'erreurs  -->
          <input class="btn btn-primary btn-lg btn-block" type="submit" name="btnsubmit" value="Envoyer">
        </form>
      </div> 
      <a href="<?= $this->url('messages_messages', ['id' => $id,'user_id' => $user_id]); ?>"><p><i class="fa fa-arrow-left" aria-hidden="true"></i> Retour aux messages</p></a>
    </div>
  </div>
</div>




<?php $this->stop('main_content'); ?>

<!-- Nicolas a ajouté une section JavaScript pour le traitement en Ajax des messages d'erreur  -->
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
