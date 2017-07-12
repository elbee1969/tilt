<?php
//hérite du fichier layout.php à la racine de app/Views/
$this->layout('layout', ['title' => 'Contact']);
?>

<?php $this->start('main_content'); ?>

<div class="container-fluid">
<div class="row">
  <div class="col-12">
    <p id="titleconnexion" class="policetitre">Contactez-nous, nous aimons recevoir des messages !</p>
    <p class="asterisc center">Tous les champs marqués d'un astérisque (*) sont obligatoires.</p>
  </div>
</div>



<div class="row">
  <div class="col-4">

  </div>
  <div class="col-md-4 col-lg-4 col-12">

    <form class="formu" action="<?= $this->url('default_contact_action'); ?>" method="post">

          <label for="prenom"></label>
          <div class="col-12">
            <input id="prenom" type="text" placeholder="Prénom" class="form-controlall" name="prenom" value="<?php if(!empty($_POST['prenom'])){ echo $_POST['prenom'];};  ?>">
          </div>
          <span style="margin-left :20px; color:red; font-size:0.70em;" ><?php if(!empty($errors['prenom'])){ echo $errors['prenom']; }; ?></span>
          <label for="nom"></label>
          <div class="col-12">
            <input id="nom" type="text" placeholder="Nom" class="form-controlall" name="nom" value="<?php if(!empty($_POST['nom'])){ echo $_POST['nom'];}; ?>">
          </div>
          <span style="margin-left :20px; color:red; font-size:0.70em;" ><?php if(!empty($errors['nom'])){ echo $errors['nom']; }; ?></span>

        <label for="email"></label>
        <div class="col-12">
          <input id="email" type="email" placeholder="Email" class="form-controlall"  name="email" value="<?php if(!empty($_POST['email'])){ echo $_POST['email'];}; ?>">
        </div>

        <span style="margin-left :20px; color:red; font-size:0.70em;" ><?php if(!empty($errors['email'])){ echo $errors['email']; }; ?></span>

        <label for="message"></label>
        <div class="col-12">
          <textarea id="message" placeholder="Message ..." class="form-controlall" name="message" rows="6"><?php if(!empty($_POST['message'])){ echo $_POST['message'];}; ?></textarea>
          <span style="margin-left :20px; color:red; font-size:0.70em;" ><?php if(!empty($errors['message'])){ echo $errors['message']; }; ?></span>
        <input class="btn btn-primary btn-lg btn-block" title="contact" type="submit" name="btnSubmit" value="Envoyer à l'équipe Tilt !"/>
        </div>
    </div>


    </form>


</div>
</div>
</div>
</div>

<div class="row">


<div class="col-4">

</div>

  <div class="col-md-4 col-lg-4 col-12">
    <p id="titleconnexion" class="policetitre">Tilt</p>
    <p class="center policejosefin">3 Rue Saint Jean, 27400 Louviers</p>
    <p class="center policejosefin">02.32.40.00.00 | contact@tilt.fr</p><br>
    <p class="center"><a href="#"><img id="messenger" src="./assets/img/tilt_messenger.png" alt="contact via messenger"></a></p><br>
</div>
</div>


<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1303.244702657093!2d1.1744434727753725!3d49.21023066061527!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e124dbb30a9d43%3A0xd4e0921c30a0d51!2s3+Rue+Saint-Jean%2C+27400+Louviers%2C+France!5e0!3m2!1sfr!2sus!4v1499675934298" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>


<?php $this->stop('main_content'); ?>
